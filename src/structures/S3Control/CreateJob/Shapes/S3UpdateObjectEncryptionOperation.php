<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectEncryption|null $ObjectEncryption
 */
class S3UpdateObjectEncryptionOperation extends Shape
{
    /**
     * @param array{ObjectEncryption?: ObjectEncryption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
