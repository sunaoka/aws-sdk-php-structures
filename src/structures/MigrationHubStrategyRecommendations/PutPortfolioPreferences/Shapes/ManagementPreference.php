<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\PutPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsManagedResources $awsManagedResources
 * @property NoManagementPreference $noPreference
 * @property SelfManageResources $selfManageResources
 */
class ManagementPreference extends Shape
{
    /**
     * @param array{
     *     awsManagedResources?: AwsManagedResources,
     *     noPreference?: NoManagementPreference,
     *     selfManageResources?: SelfManageResources
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
