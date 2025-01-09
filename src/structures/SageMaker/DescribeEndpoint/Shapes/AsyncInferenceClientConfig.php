<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxConcurrentInvocationsPerInstance
 */
class AsyncInferenceClientConfig extends Shape
{
    /**
     * @param array{MaxConcurrentInvocationsPerInstance?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
