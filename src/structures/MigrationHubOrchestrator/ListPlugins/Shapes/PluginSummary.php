<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pluginId
 * @property string|null $hostname
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property string|null $ipAddress
 * @property string|null $version
 * @property string|null $registeredTime
 */
class PluginSummary extends Shape
{
    /**
     * @param array{
     *     pluginId?: string|null,
     *     hostname?: string|null,
     *     status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     ipAddress?: string|null,
     *     version?: string|null,
     *     registeredTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
