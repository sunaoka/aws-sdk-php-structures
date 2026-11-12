<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $KeyPrefix
 * @property string|null $ExportedPrefix
 */
class SnapshotOperationS3PrefixLocation extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     KeyPrefix: string,
     *     ExportedPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
