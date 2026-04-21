<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConfig|null $VpcConfig
 */
class AIBenchmarkNetworkConfig extends Shape
{
    /**
     * @param array{VpcConfig?: VpcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
