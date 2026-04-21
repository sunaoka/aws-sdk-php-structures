<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string|null $TargetContainerHostname
 * @property list<AIBenchmarkInferenceComponent>|null $InferenceComponents
 */
class AIBenchmarkEndpoint extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     TargetContainerHostname?: string|null,
     *     InferenceComponents?: list<AIBenchmarkInferenceComponent>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
