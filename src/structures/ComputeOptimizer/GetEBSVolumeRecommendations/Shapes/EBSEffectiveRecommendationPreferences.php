<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EBSSavingsEstimationMode|null $savingsEstimationMode
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 */
class EBSEffectiveRecommendationPreferences extends Shape
{
    /**
     * @param array{
     *     savingsEstimationMode?: EBSSavingsEstimationMode|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
