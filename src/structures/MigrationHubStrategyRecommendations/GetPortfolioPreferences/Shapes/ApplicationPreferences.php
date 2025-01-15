<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagementPreference|null $managementPreference
 */
class ApplicationPreferences extends Shape
{
    /**
     * @param array{managementPreference?: ManagementPreference|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
