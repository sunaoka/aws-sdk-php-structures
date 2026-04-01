<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateDaemon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonName
 * @property string|null $clusterArn
 * @property string $daemonTaskDefinitionArn
 * @property list<string> $capacityProviderArns
 * @property Shapes\DaemonDeploymentConfiguration|null $deploymentConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property 'DAEMON'|'NONE'|null $propagateTags
 * @property bool|null $enableECSManagedTags
 * @property bool|null $enableExecuteCommand
 * @property string|null $clientToken
 */
class CreateDaemonRequest extends Request
{
    /**
     * @param array{
     *     daemonName: string,
     *     clusterArn?: string|null,
     *     daemonTaskDefinitionArn: string,
     *     capacityProviderArns: list<string>,
     *     deploymentConfiguration?: Shapes\DaemonDeploymentConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     propagateTags?: 'DAEMON'|'NONE'|null,
     *     enableECSManagedTags?: bool|null,
     *     enableExecuteCommand?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
