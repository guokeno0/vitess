package pbrpc

import (
	"encoding/binary"
	"fmt"
	"io"
)

// WriteNetString writes data to a big-endian netstring on a Writer.
// Size is always a 32-bit unsigned int.
func WriteNetString(w io.Writer, data []byte) (written int, err error) {
	size := make([]byte, 4)
	binary.BigEndian.PutUint32(size, uint32(len(data)))
	if written, err = w.Write(size); err != nil {
		return
	}
	return w.Write(data)
}

// ReadNetString reads data from a big-endian netstring.
func ReadNetString(r io.Reader) ([]byte, error) {
	sizeBuf := make([]byte, 4)
	_, err := r.Read(sizeBuf)
	if err != nil {
		return nil, err
	}
	size := binary.BigEndian.Uint32(sizeBuf)
	if size == 0 {
		return nil, nil
	}
	data := make([]byte, size)
	n, err := r.Read(data)
	// Read() might successfully read 'size' bytes but return err = io.EOF.
	// We only care whether we successfully read the number of bytes we expect.
	if n != int(size) {
		return nil, fmt.Errorf("unexpected EOF in ReadNetString, err = %v", err)
	}
	return data, nil
}
