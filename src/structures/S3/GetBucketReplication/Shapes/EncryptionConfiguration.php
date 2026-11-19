<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicaKmsKeyID
 * @property UseSourceMultiRegionKey|null $UseSourceMultiRegionKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     ReplicaKmsKeyID?: string|null,
     *     UseSourceMultiRegionKey?: UseSourceMultiRegionKey|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
