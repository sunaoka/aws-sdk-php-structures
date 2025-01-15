<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsManagedResources|null $awsManagedResources
 * @property NoManagementPreference|null $noPreference
 * @property SelfManageResources|null $selfManageResources
 */
class ManagementPreference extends Shape
{
    /**
     * @param array{
     *     awsManagedResources?: AwsManagedResources|null,
     *     noPreference?: NoManagementPreference|null,
     *     selfManageResources?: SelfManageResources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
