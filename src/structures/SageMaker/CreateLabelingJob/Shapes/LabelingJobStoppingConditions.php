<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxHumanLabeledObjectCount
 * @property int $MaxPercentageOfInputDatasetLabeled
 */
class LabelingJobStoppingConditions extends Shape
{
    /**
     * @param array{
     *     MaxHumanLabeledObjectCount?: int,
     *     MaxPercentageOfInputDatasetLabeled?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
