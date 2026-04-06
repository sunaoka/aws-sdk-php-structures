<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 * @property string|null $displayName
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property string|null $serverUrl
 * @property Shapes\CustomPluginConfiguration|null $customPluginConfiguration
 * @property Shapes\PluginAuthConfiguration|null $authConfiguration
 */
class UpdatePluginRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     pluginId: string,
     *     displayName?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     serverUrl?: string|null,
     *     customPluginConfiguration?: Shapes\CustomPluginConfiguration|null,
     *     authConfiguration?: Shapes\PluginAuthConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
