<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $S3Location
 */
class OutputConfig extends Shape
{
    /**
     * @param array{S3Location: S3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
