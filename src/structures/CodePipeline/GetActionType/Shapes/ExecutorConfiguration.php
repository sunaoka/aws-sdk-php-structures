<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaExecutorConfiguration|null $lambdaExecutorConfiguration
 * @property JobWorkerExecutorConfiguration|null $jobWorkerExecutorConfiguration
 */
class ExecutorConfiguration extends Shape
{
    /**
     * @param array{
     *     lambdaExecutorConfiguration?: LambdaExecutorConfiguration|null,
     *     jobWorkerExecutorConfiguration?: JobWorkerExecutorConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
