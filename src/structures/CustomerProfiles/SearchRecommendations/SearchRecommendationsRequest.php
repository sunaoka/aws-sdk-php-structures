<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $KeyName
 * @property list<string> $KeyValues
 * @property Shapes\Recommender $Recommender
 * @property list<string>|null $CandidateIds
 * @property array<string, string>|null $Context
 * @property Shapes\RecommendationDiversityConfig|null $Diversity
 * @property Shapes\RecommendationMetadata|null $Metadata
 * @property int<1, 500>|null $MaxRecommendations
 */
class SearchRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     KeyName: string,
     *     KeyValues: list<string>,
     *     Recommender: Shapes\Recommender,
     *     CandidateIds?: list<string>|null,
     *     Context?: array<string, string>|null,
     *     Diversity?: Shapes\RecommendationDiversityConfig|null,
     *     Metadata?: Shapes\RecommendationMetadata|null,
     *     MaxRecommendations?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
