<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NoncurrentDays
 * @property int $NewerNoncurrentVersions
 */
class NoncurrentVersionExpiration extends Shape
{
    /**
     * @param array{
     *     NoncurrentDays?: int,
     *     NewerNoncurrentVersions?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
