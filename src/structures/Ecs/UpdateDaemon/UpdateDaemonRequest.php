<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateDaemon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonArn
 * @property string $daemonTaskDefinitionArn
 * @property list<string> $capacityProviderArns
 * @property Shapes\DaemonDeploymentConfiguration|null $deploymentConfiguration
 * @property 'DAEMON'|'NONE'|null $propagateTags
 * @property bool|null $enableECSManagedTags
 * @property bool|null $enableExecuteCommand
 */
class UpdateDaemonRequest extends Request
{
    /**
     * @param array{
     *     daemonArn: string,
     *     daemonTaskDefinitionArn: string,
     *     capacityProviderArns: list<string>,
     *     deploymentConfiguration?: Shapes\DaemonDeploymentConfiguration|null,
     *     propagateTags?: 'DAEMON'|'NONE'|null,
     *     enableECSManagedTags?: bool|null,
     *     enableExecuteCommand?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
