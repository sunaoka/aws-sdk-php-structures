<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ECSSavingsEstimationMode|null $savingsEstimationMode
 */
class ECSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{savingsEstimationMode?: ECSSavingsEstimationMode|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
