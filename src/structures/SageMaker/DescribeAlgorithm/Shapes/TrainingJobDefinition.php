<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Pipe'|'File'|'FastFile' $TrainingInputMode
 * @property array<string, string>|null $HyperParameters
 * @property list<Channel> $InputDataConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property ResourceConfig $ResourceConfig
 * @property StoppingCondition $StoppingCondition
 */
class TrainingJobDefinition extends Shape
{
    /**
     * @param array{
     *     TrainingInputMode: 'Pipe'|'File'|'FastFile',
     *     HyperParameters?: array<string, string>|null,
     *     InputDataConfig: list<Channel>,
     *     OutputDataConfig: OutputDataConfig,
     *     ResourceConfig: ResourceConfig,
     *     StoppingCondition: StoppingCondition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
