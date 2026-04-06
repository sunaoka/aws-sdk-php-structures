<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $status
 */
class ElasticInferenceAcceleratorHealth extends Shape
{
    /**
     * @param array{status?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
