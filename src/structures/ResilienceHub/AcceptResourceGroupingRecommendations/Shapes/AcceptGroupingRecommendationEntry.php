<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AcceptResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupingRecommendationId
 */
class AcceptGroupingRecommendationEntry extends Shape
{
    /**
     * @param array{groupingRecommendationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
