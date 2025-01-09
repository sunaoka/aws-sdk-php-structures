<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARNUpdate
 * @property string $BasePathUpdate
 */
class S3ContentBaseLocationUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string,
     *     BasePathUpdate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
