<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicaKmsKeyID
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{ReplicaKmsKeyID?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
