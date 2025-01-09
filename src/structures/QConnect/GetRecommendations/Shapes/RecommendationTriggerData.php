<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryRecommendationTriggerData $query
 */
class RecommendationTriggerData extends Shape
{
    /**
     * @param array{query?: QueryRecommendationTriggerData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
