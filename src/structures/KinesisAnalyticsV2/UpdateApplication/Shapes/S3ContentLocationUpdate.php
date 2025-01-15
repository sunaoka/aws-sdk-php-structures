<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketARNUpdate
 * @property string|null $FileKeyUpdate
 * @property string|null $ObjectVersionUpdate
 */
class S3ContentLocationUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string|null,
     *     FileKeyUpdate?: string|null,
     *     ObjectVersionUpdate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
