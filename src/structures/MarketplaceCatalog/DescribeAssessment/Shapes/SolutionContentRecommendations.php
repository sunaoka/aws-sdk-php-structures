<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentRecommendation|null $Title
 * @property ContentRecommendation|null $ShortDescription
 * @property ContentRecommendation|null $LongDescription
 * @property ContentRecommendation|null $IntegrationDetails
 * @property ContentRecommendation|null $AdditionalResources
 * @property ContentRecommendation|null $UseCases
 * @property ContentRecommendation|null $CaseStudies
 * @property list<RecommendationCitation> $Citations
 */
class SolutionContentRecommendations extends Shape
{
    /**
     * @param array{
     *     Title?: ContentRecommendation|null,
     *     ShortDescription?: ContentRecommendation|null,
     *     LongDescription?: ContentRecommendation|null,
     *     IntegrationDetails?: ContentRecommendation|null,
     *     AdditionalResources?: ContentRecommendation|null,
     *     UseCases?: ContentRecommendation|null,
     *     CaseStudies?: ContentRecommendation|null,
     *     Citations: list<RecommendationCitation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
