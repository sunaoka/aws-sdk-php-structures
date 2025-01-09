<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SseKmsEncryptedObjects $SseKmsEncryptedObjects
 * @property ReplicaModifications $ReplicaModifications
 */
class SourceSelectionCriteria extends Shape
{
    /**
     * @param array{
     *     SseKmsEncryptedObjects?: SseKmsEncryptedObjects,
     *     ReplicaModifications?: ReplicaModifications
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
