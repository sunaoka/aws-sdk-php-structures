<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketDestination|null $S3BucketDestination
 * @property CloudWatchMetrics|null $CloudWatchMetrics
 */
class StorageLensDataExport extends Shape
{
    /**
     * @param array{
     *     S3BucketDestination?: S3BucketDestination|null,
     *     CloudWatchMetrics?: CloudWatchMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
