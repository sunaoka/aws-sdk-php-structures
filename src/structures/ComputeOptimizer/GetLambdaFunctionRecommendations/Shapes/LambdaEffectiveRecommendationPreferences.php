<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaSavingsEstimationMode|null $savingsEstimationMode
 */
class LambdaEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{savingsEstimationMode?: LambdaSavingsEstimationMode|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
