<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 */
class ElasticInferenceAcceleratorHealth extends Shape
{
    /**
     * @param array{status?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
