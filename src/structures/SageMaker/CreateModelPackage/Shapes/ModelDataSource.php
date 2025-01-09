<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ModelDataSource $S3DataSource
 */
class ModelDataSource extends Shape
{
    /**
     * @param array{S3DataSource?: S3ModelDataSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
