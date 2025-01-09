<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingImage
 * @property 'Pipe'|'File'|'FastFile' $TrainingInputMode
 * @property string $AlgorithmName
 * @property list<MetricDefinition> $MetricDefinitions
 */
class HyperParameterAlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     TrainingImage?: string,
     *     TrainingInputMode: 'Pipe'|'File'|'FastFile',
     *     AlgorithmName?: string,
     *     MetricDefinitions?: list<MetricDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
