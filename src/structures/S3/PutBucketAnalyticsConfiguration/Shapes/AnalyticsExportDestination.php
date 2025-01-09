<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalyticsS3BucketDestination $S3BucketDestination
 */
class AnalyticsExportDestination extends Shape
{
    /**
     * @param array{S3BucketDestination: AnalyticsS3BucketDestination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
