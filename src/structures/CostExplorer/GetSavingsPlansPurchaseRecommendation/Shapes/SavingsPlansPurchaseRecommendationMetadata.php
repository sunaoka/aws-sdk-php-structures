<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property string|null $GenerationTimestamp
 * @property string|null $AdditionalMetadata
 */
class SavingsPlansPurchaseRecommendationMetadata extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     GenerationTimestamp?: string|null,
     *     AdditionalMetadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
