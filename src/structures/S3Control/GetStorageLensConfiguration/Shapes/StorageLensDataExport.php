<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketDestination $S3BucketDestination
 * @property CloudWatchMetrics $CloudWatchMetrics
 */
class StorageLensDataExport extends Shape
{
    /**
     * @param array{
     *     S3BucketDestination?: S3BucketDestination,
     *     CloudWatchMetrics?: CloudWatchMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
