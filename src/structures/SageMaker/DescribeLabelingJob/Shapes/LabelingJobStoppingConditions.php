<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxHumanLabeledObjectCount
 * @property int<1, 100> $MaxPercentageOfInputDatasetLabeled
 */
class LabelingJobStoppingConditions extends Shape
{
    /**
     * @param array{
     *     MaxHumanLabeledObjectCount?: int<1, max>,
     *     MaxPercentageOfInputDatasetLabeled?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
