<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $stepsCompleted
 * @property int $totalSteps
 * @property double $completionPercentage
 */
class Progress extends Shape
{
    /**
     * @param array{
     *     stepsCompleted: int,
     *     totalSteps: int,
     *     completionPercentage: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
