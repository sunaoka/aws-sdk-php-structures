<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SseKmsEncryptedObjects|null $SseKmsEncryptedObjects
 * @property ReplicaModifications|null $ReplicaModifications
 */
class SourceSelectionCriteria extends Shape
{
    /**
     * @param array{
     *     SseKmsEncryptedObjects?: SseKmsEncryptedObjects|null,
     *     ReplicaModifications?: ReplicaModifications|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
