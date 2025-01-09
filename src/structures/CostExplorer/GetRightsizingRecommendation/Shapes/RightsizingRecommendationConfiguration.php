<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SAME_INSTANCE_FAMILY'|'CROSS_INSTANCE_FAMILY' $RecommendationTarget
 * @property bool $BenefitsConsidered
 */
class RightsizingRecommendationConfiguration extends Shape
{
    /**
     * @param array{
     *     RecommendationTarget: 'SAME_INSTANCE_FAMILY'|'CROSS_INSTANCE_FAMILY',
     *     BenefitsConsidered: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
