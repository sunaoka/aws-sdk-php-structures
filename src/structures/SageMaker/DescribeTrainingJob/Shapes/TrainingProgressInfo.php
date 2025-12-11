<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TotalStepCountPerEpoch
 * @property int<0, max>|null $CurrentStep
 * @property int<0, max>|null $CurrentEpoch
 * @property int<0, max>|null $MaxEpoch
 */
class TrainingProgressInfo extends Shape
{
    /**
     * @param array{
     *     TotalStepCountPerEpoch?: int<0, max>|null,
     *     CurrentStep?: int<0, max>|null,
     *     CurrentEpoch?: int<0, max>|null,
     *     MaxEpoch?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
