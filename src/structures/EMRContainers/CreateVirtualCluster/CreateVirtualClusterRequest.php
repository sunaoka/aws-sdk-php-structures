<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateVirtualCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ContainerProvider $containerProvider
 * @property string $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $securityConfigurationId
 */
class CreateVirtualClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     containerProvider: Shapes\ContainerProvider,
     *     clientToken: string,
     *     tags?: array<string, string>|null,
     *     securityConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
