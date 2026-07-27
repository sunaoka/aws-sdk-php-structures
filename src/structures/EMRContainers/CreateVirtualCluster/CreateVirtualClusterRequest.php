<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateVirtualCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ContainerProvider $containerProvider
 * @property string $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $securityConfigurationId
 * @property bool|null $sessionEnabled
 * @property Shapes\SchedulerConfiguration|null $schedulerConfiguration
 */
class CreateVirtualClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     containerProvider: Shapes\ContainerProvider,
     *     clientToken: string,
     *     tags?: array<string, string>|null,
     *     securityConfigurationId?: string|null,
     *     sessionEnabled?: bool|null,
     *     schedulerConfiguration?: Shapes\SchedulerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
