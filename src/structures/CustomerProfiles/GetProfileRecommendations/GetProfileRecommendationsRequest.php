<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string $RecommenderName
 * @property array<string, string>|null $Context
 * @property list<Shapes\RecommenderFilter>|null $RecommenderFilters
 * @property list<Shapes\RecommenderPromotionalFilter>|null $RecommenderPromotionalFilters
 * @property list<string>|null $CandidateIds
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\MetadataConfig|null $MetadataConfig
 */
class GetProfileRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     RecommenderName: string,
     *     Context?: array<string, string>|null,
     *     RecommenderFilters?: list<Shapes\RecommenderFilter>|null,
     *     RecommenderPromotionalFilters?: list<Shapes\RecommenderPromotionalFilter>|null,
     *     CandidateIds?: list<string>|null,
     *     MaxResults?: int<1, 500>|null,
     *     MetadataConfig?: Shapes\MetadataConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
