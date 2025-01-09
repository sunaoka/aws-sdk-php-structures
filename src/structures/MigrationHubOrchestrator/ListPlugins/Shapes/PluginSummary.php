<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pluginId
 * @property string $hostname
 * @property 'HEALTHY'|'UNHEALTHY' $status
 * @property string $ipAddress
 * @property string $version
 * @property string $registeredTime
 */
class PluginSummary extends Shape
{
    /**
     * @param array{
     *     pluginId?: string,
     *     hostname?: string,
     *     status?: 'HEALTHY'|'UNHEALTHY',
     *     ipAddress?: string,
     *     version?: string,
     *     registeredTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
