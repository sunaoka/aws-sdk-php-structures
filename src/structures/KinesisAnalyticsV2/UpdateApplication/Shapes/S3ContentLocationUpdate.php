<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARNUpdate
 * @property string $FileKeyUpdate
 * @property string $ObjectVersionUpdate
 */
class S3ContentLocationUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string,
     *     FileKeyUpdate?: string,
     *     ObjectVersionUpdate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
