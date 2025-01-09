<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 * @property string $displayName
 * @property 'ENABLED'|'DISABLED' $state
 * @property string $serverUrl
 * @property Shapes\CustomPluginConfiguration $customPluginConfiguration
 * @property Shapes\PluginAuthConfiguration $authConfiguration
 */
class UpdatePluginRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     pluginId: string,
     *     displayName?: string,
     *     state?: 'ENABLED'|'DISABLED',
     *     serverUrl?: string,
     *     customPluginConfiguration?: Shapes\CustomPluginConfiguration,
     *     authConfiguration?: Shapes\PluginAuthConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
