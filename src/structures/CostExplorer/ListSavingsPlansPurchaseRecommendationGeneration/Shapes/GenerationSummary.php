<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListSavingsPlansPurchaseRecommendationGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED'|null $GenerationStatus
 * @property string|null $GenerationStartedTime
 * @property string|null $GenerationCompletionTime
 * @property string|null $EstimatedCompletionTime
 */
class GenerationSummary extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     GenerationStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED'|null,
     *     GenerationStartedTime?: string|null,
     *     GenerationCompletionTime?: string|null,
     *     EstimatedCompletionTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
