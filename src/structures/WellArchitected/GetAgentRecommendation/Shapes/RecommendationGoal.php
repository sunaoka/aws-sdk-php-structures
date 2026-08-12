<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 */
class RecommendationGoal extends Shape
{
    /**
     * @param array{title: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
