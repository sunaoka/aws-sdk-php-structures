<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListSavingsPlansPurchaseRecommendationGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $GenerationStatus
 * @property string $GenerationStartedTime
 * @property string $GenerationCompletionTime
 * @property string $EstimatedCompletionTime
 */
class GenerationSummary extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     GenerationStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED',
     *     GenerationStartedTime?: string,
     *     GenerationCompletionTime?: string,
     *     EstimatedCompletionTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
