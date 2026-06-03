<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ECSSavingsEstimationMode|null $savingsEstimationMode
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 */
class ECSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     savingsEstimationMode?: ECSSavingsEstimationMode|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
