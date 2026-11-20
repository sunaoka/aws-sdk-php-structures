<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FeatureRecommendation> $Recommendations
 */
class FeatureRecommendations extends Shape
{
    /**
     * @param array{Recommendations: list<FeatureRecommendation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
