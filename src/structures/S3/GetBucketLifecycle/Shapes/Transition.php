<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property int|null $Days
 * @property 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'|null $StorageClass
 */
class Transition extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     Days?: int|null,
     *     StorageClass?: 'GLACIER'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'DEEP_ARCHIVE'|'GLACIER_IR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
