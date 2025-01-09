<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $DurationInSeconds
 * @property int<1, max> $NumberOfSteps
 * @property int<1, 3> $UsersPerStep
 */
class Stairs extends Shape
{
    /**
     * @param array{
     *     DurationInSeconds?: int<1, max>,
     *     NumberOfSteps?: int<1, max>,
     *     UsersPerStep?: int<1, 3>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
