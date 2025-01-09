<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingImage
 * @property string $AlgorithmName
 * @property 'Pipe'|'File'|'FastFile' $TrainingInputMode
 * @property list<MetricDefinition> $MetricDefinitions
 * @property bool $EnableSageMakerMetricsTimeSeries
 * @property list<string> $ContainerEntrypoint
 * @property list<string> $ContainerArguments
 * @property TrainingImageConfig $TrainingImageConfig
 */
class AlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     TrainingImage?: string,
     *     AlgorithmName?: string,
     *     TrainingInputMode: 'Pipe'|'File'|'FastFile',
     *     MetricDefinitions?: list<MetricDefinition>,
     *     EnableSageMakerMetricsTimeSeries?: bool,
     *     ContainerEntrypoint?: list<string>,
     *     ContainerArguments?: list<string>,
     *     TrainingImageConfig?: TrainingImageConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
