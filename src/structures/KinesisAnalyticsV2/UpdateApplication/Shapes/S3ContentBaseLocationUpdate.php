<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketARNUpdate
 * @property string|null $BasePathUpdate
 */
class S3ContentBaseLocationUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string|null,
     *     BasePathUpdate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
