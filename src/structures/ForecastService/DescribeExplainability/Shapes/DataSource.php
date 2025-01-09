<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config $S3Config
 */
class DataSource extends Shape
{
    /**
     * @param array{S3Config: S3Config} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
