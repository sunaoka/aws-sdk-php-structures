<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxHumanLabeledObjectCount
 * @property int<1, 100>|null $MaxPercentageOfInputDatasetLabeled
 */
class LabelingJobStoppingConditions extends Shape
{
    /**
     * @param array{
     *     MaxHumanLabeledObjectCount?: int<1, max>|null,
     *     MaxPercentageOfInputDatasetLabeled?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
