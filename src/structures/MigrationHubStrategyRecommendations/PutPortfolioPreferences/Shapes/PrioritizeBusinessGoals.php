<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessGoals $businessGoals
 */
class PrioritizeBusinessGoals extends Shape
{
    /**
     * @param array{businessGoals?: BusinessGoals} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
