<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListSavingsPlansPurchaseRecommendationGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUCCEEDED'|'PROCESSING'|'FAILED'|null $GenerationStatus
 * @property list<string>|null $RecommendationIds
 * @property int<0, max>|null $PageSize
 * @property string|null $NextPageToken
 */
class ListSavingsPlansPurchaseRecommendationGenerationRequest extends Request
{
    /**
     * @param array{
     *     GenerationStatus?: 'SUCCEEDED'|'PROCESSING'|'FAILED'|null,
     *     RecommendationIds?: list<string>|null,
     *     PageSize?: int<0, max>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
