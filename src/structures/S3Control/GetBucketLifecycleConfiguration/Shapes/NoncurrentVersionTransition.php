<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NoncurrentDays
 * @property 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|null $StorageClass
 */
class NoncurrentVersionTransition extends Shape
{
    /**
     * @param array{
     *     NoncurrentDays?: int|null,
     *     StorageClass?: 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
