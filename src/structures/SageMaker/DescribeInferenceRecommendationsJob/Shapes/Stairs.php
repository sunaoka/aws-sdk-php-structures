<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInSeconds
 * @property int $NumberOfSteps
 * @property int $UsersPerStep
 */
class Stairs extends Shape
{
    /**
     * @param array{
     *     DurationInSeconds?: int,
     *     NumberOfSteps?: int,
     *     UsersPerStep?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
