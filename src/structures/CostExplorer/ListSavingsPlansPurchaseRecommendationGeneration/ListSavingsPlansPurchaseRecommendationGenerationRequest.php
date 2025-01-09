<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListSavingsPlansPurchaseRecommendationGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED' $GenerationStatus
 * @property list<string> $RecommendationIds
 * @property int<0, max> $PageSize
 * @property string $NextPageToken
 */
class ListSavingsPlansPurchaseRecommendationGenerationRequest extends Request
{
    /**
     * @param array{
     *     GenerationStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED',
     *     RecommendationIds?: list<string>,
     *     PageSize?: int<0, max>,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
