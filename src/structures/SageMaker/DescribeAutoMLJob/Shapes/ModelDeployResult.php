<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 */
class ModelDeployResult extends Shape
{
    /**
     * @param array{EndpointName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
