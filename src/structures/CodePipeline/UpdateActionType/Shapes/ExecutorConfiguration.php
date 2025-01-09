<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaExecutorConfiguration $lambdaExecutorConfiguration
 * @property JobWorkerExecutorConfiguration $jobWorkerExecutorConfiguration
 */
class ExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     lambdaExecutorConfiguration?: LambdaExecutorConfiguration,
     *     jobWorkerExecutorConfiguration?: JobWorkerExecutorConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
