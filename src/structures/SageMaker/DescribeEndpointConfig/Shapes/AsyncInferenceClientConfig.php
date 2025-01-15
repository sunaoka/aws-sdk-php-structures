<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $MaxConcurrentInvocationsPerInstance
 */
class AsyncInferenceClientConfig extends Shape
{
    /**
     * @param array{MaxConcurrentInvocationsPerInstance?: int<1, 1000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
