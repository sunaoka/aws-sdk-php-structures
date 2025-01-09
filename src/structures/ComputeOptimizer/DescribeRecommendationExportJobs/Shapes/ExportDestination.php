<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DescribeRecommendationExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination $s3
 */
class ExportDestination extends Shape
{
    /**
     * @param array{s3?: S3Destination} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
