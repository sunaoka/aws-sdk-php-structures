<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLS3DataSource $S3DataSource
 */
class AutoMLDataSource extends Shape
{
    /**
     * @param array{S3DataSource: AutoMLS3DataSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
