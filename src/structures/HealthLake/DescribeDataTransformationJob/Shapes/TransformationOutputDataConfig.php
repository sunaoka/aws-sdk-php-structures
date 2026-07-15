<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeDataTransformationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataTransformationS3Configuration $S3Configuration
 */
class TransformationOutputDataConfig extends Shape
{
    /**
     * @param array{S3Configuration: DataTransformationS3Configuration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
