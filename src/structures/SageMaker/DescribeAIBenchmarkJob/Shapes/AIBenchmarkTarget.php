<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIBenchmarkEndpoint|null $Endpoint
 */
class AIBenchmarkTarget extends Shape
{
    /**
     * @param array{Endpoint?: AIBenchmarkEndpoint|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
