<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrainingImage
 * @property 'Pipe'|'File'|'FastFile' $TrainingInputMode
 * @property string|null $AlgorithmName
 * @property list<MetricDefinition>|null $MetricDefinitions
 */
class HyperParameterAlgorithmSpecification extends Shape
{
    /**
     * @param array{
     *     TrainingImage?: string|null,
     *     TrainingInputMode: 'Pipe'|'File'|'FastFile',
     *     AlgorithmName?: string|null,
     *     MetricDefinitions?: list<MetricDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
