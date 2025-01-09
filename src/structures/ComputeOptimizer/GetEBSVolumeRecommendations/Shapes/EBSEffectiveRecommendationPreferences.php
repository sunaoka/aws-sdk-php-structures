<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EBSSavingsEstimationMode $savingsEstimationMode
 */
class EBSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{savingsEstimationMode?: EBSSavingsEstimationMode} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
