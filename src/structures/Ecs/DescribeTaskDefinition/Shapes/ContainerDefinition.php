<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $image
 * @property RepositoryCredentials|null $repositoryCredentials
 * @property int|null $cpu
 * @property int|null $memory
 * @property int|null $memoryReservation
 * @property list<string>|null $links
 * @property list<PortMapping>|null $portMappings
 * @property bool|null $essential
 * @property ContainerRestartPolicy|null $restartPolicy
 * @property list<string>|null $entryPoint
 * @property list<string>|null $command
 * @property list<KeyValuePair>|null $environment
 * @property list<EnvironmentFile>|null $environmentFiles
 * @property list<MountPoint>|null $mountPoints
 * @property list<VolumeFrom>|null $volumesFrom
 * @property LinuxParameters|null $linuxParameters
 * @property list<Secret>|null $secrets
 * @property list<ContainerDependency>|null $dependsOn
 * @property int|null $startTimeout
 * @property int|null $stopTimeout
 * @property 'enabled'|'disabled'|null $versionConsistency
 * @property string|null $hostname
 * @property string|null $user
 * @property string|null $workingDirectory
 * @property bool|null $disableNetworking
 * @property bool|null $privileged
 * @property bool|null $readonlyRootFilesystem
 * @property list<string>|null $dnsServers
 * @property list<string>|null $dnsSearchDomains
 * @property list<HostEntry>|null $extraHosts
 * @property list<string>|null $dockerSecurityOptions
 * @property bool|null $interactive
 * @property bool|null $pseudoTerminal
 * @property array<string, string>|null $dockerLabels
 * @property list<Ulimit>|null $ulimits
 * @property LogConfiguration|null $logConfiguration
 * @property HealthCheck|null $healthCheck
 * @property list<SystemControl>|null $systemControls
 * @property list<ResourceRequirement>|null $resourceRequirements
 * @property FirelensConfiguration|null $firelensConfiguration
 * @property list<string>|null $credentialSpecs
 */
class ContainerDefinition extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     image?: string|null,
     *     repositoryCredentials?: RepositoryCredentials|null,
     *     cpu?: int|null,
     *     memory?: int|null,
     *     memoryReservation?: int|null,
     *     links?: list<string>|null,
     *     portMappings?: list<PortMapping>|null,
     *     essential?: bool|null,
     *     restartPolicy?: ContainerRestartPolicy|null,
     *     entryPoint?: list<string>|null,
     *     command?: list<string>|null,
     *     environment?: list<KeyValuePair>|null,
     *     environmentFiles?: list<EnvironmentFile>|null,
     *     mountPoints?: list<MountPoint>|null,
     *     volumesFrom?: list<VolumeFrom>|null,
     *     linuxParameters?: LinuxParameters|null,
     *     secrets?: list<Secret>|null,
     *     dependsOn?: list<ContainerDependency>|null,
     *     startTimeout?: int|null,
     *     stopTimeout?: int|null,
     *     versionConsistency?: 'enabled'|'disabled'|null,
     *     hostname?: string|null,
     *     user?: string|null,
     *     workingDirectory?: string|null,
     *     disableNetworking?: bool|null,
     *     privileged?: bool|null,
     *     readonlyRootFilesystem?: bool|null,
     *     dnsServers?: list<string>|null,
     *     dnsSearchDomains?: list<string>|null,
     *     extraHosts?: list<HostEntry>|null,
     *     dockerSecurityOptions?: list<string>|null,
     *     interactive?: bool|null,
     *     pseudoTerminal?: bool|null,
     *     dockerLabels?: array<string, string>|null,
     *     ulimits?: list<Ulimit>|null,
     *     logConfiguration?: LogConfiguration|null,
     *     healthCheck?: HealthCheck|null,
     *     systemControls?: list<SystemControl>|null,
     *     resourceRequirements?: list<ResourceRequirement>|null,
     *     firelensConfiguration?: FirelensConfiguration|null,
     *     credentialSpecs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
