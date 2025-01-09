<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaSavingsEstimationMode $savingsEstimationMode
 */
class LambdaEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{savingsEstimationMode?: LambdaSavingsEstimationMode} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
