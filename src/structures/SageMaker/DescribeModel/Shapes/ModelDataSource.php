<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ModelDataSource|null $S3DataSource
 */
class ModelDataSource extends Shape
{
    /**
     * @param array{S3DataSource?: S3ModelDataSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
