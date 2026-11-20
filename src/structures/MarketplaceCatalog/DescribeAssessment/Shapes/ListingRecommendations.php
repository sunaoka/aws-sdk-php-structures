<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductContentRecommendations|null $ProductContentRecommendations
 * @property SolutionContentRecommendations|null $SolutionContentRecommendations
 * @property FeatureRecommendations|null $FeatureRecommendations
 */
class ListingRecommendations extends Shape
{
    /**
     * @param array{
     *     ProductContentRecommendations?: ProductContentRecommendations|null,
     *     SolutionContentRecommendations?: SolutionContentRecommendations|null,
     *     FeatureRecommendations?: FeatureRecommendations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
