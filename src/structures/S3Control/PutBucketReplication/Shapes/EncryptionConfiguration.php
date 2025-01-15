<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicaKmsKeyID
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{ReplicaKmsKeyID?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
