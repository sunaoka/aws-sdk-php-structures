<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentRecommendation|null $ProductTitle
 * @property ContentRecommendation|null $ShortDescription
 * @property ContentRecommendation|null $LongDescription
 * @property ContentRecommendation|null $SupportDescription
 * @property ContentRecommendation|null $Highlights
 * @property ContentRecommendation|null $SearchKeywords
 * @property ContentRecommendation|null $Categories
 * @property ContentRecommendation|null $AdditionalResources
 * @property list<RecommendationCitation> $Citations
 */
class ProductContentRecommendations extends Shape
{
    /**
     * @param array{
     *     ProductTitle?: ContentRecommendation|null,
     *     ShortDescription?: ContentRecommendation|null,
     *     LongDescription?: ContentRecommendation|null,
     *     SupportDescription?: ContentRecommendation|null,
     *     Highlights?: ContentRecommendation|null,
     *     SearchKeywords?: ContentRecommendation|null,
     *     Categories?: ContentRecommendation|null,
     *     AdditionalResources?: ContentRecommendation|null,
     *     Citations: list<RecommendationCitation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
