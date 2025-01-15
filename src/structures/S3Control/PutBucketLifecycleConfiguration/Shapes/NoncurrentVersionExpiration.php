<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NoncurrentDays
 * @property int|null $NewerNoncurrentVersions
 */
class NoncurrentVersionExpiration extends Shape
{
    /**
     * @param array{
     *     NoncurrentDays?: int|null,
     *     NewerNoncurrentVersions?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
