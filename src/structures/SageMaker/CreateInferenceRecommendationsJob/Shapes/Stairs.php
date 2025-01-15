<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $DurationInSeconds
 * @property int<1, max>|null $NumberOfSteps
 * @property int<1, 3>|null $UsersPerStep
 */
class Stairs extends Shape
{
    /**
     * @param array{
     *     DurationInSeconds?: int<1, max>|null,
     *     NumberOfSteps?: int<1, max>|null,
     *     UsersPerStep?: int<1, 3>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
