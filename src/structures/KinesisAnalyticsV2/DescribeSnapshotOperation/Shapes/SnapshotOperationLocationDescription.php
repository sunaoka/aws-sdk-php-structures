<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $LocationType
 * @property SnapshotOperationS3PrefixLocation $S3PrefixLocation
 */
class SnapshotOperationLocationDescription extends Shape
{
    /**
     * @param array{
     *     LocationType: 'S3',
     *     S3PrefixLocation: SnapshotOperationS3PrefixLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
