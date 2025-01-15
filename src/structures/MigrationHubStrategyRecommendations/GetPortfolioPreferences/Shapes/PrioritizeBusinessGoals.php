<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessGoals|null $businessGoals
 */
class PrioritizeBusinessGoals extends Shape
{
    /**
     * @param array{businessGoals?: BusinessGoals|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
