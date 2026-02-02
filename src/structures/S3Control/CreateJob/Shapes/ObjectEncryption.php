<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3UpdateObjectEncryptionSSEKMS|null $SSEKMS
 */
class ObjectEncryption extends Shape
{
    /**
     * @param array{SSEKMS?: S3UpdateObjectEncryptionSSEKMS|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
