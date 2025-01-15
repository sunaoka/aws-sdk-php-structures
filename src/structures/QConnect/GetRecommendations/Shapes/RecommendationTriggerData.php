<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryRecommendationTriggerData|null $query
 */
class RecommendationTriggerData extends Shape
{
    /**
     * @param array{query?: QueryRecommendationTriggerData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
