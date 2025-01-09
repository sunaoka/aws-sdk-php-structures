<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NoncurrentDays
 * @property 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR' $StorageClass
 * @property int $NewerNoncurrentVersions
 */
class NoncurrentVersionTransition extends Shape
{
    /**
     * @param array{
     *     NoncurrentDays?: int,
     *     StorageClass?: 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR',
     *     NewerNoncurrentVersions?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
