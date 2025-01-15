<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrainingImage
 * @property string|null $AlgorithmName
 * @property 'Pipe'|'File'|'FastFile' $TrainingInputMode
 * @property list<MetricDefinition>|null $MetricDefinitions
 * @property bool|null $EnableSageMakerMetricsTimeSeries
 * @property list<string>|null $ContainerEntrypoint
 * @property list<string>|null $ContainerArguments
 * @property TrainingImageConfig|null $TrainingImageConfig
 */
class AlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     TrainingImage?: string|null,
     *     AlgorithmName?: string|null,
     *     TrainingInputMode: 'Pipe'|'File'|'FastFile',
     *     MetricDefinitions?: list<MetricDefinition>|null,
     *     EnableSageMakerMetricsTimeSeries?: bool|null,
     *     ContainerEntrypoint?: list<string>|null,
     *     ContainerArguments?: list<string>|null,
     *     TrainingImageConfig?: TrainingImageConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
