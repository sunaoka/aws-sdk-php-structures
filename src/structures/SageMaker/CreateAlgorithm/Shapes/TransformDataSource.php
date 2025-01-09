<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransformS3DataSource $S3DataSource
 */
class TransformDataSource extends Shape
{
    /**
     * @param array{S3DataSource: TransformS3DataSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
