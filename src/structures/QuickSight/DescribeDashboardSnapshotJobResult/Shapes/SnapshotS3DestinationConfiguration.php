<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketConfiguration $BucketConfiguration
 */
class SnapshotS3DestinationConfiguration extends Shape
{
    /**
     * @param array{BucketConfiguration: S3BucketConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
