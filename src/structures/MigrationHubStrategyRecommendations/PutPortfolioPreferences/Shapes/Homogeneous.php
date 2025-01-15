<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'None specified'>|null $targetDatabaseEngine
 */
class Homogeneous extends Shape
{
    /**
     * @param array{targetDatabaseEngine?: list<'None specified'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
