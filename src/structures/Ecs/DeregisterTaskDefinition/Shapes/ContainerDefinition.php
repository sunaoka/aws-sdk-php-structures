<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $image
 * @property RepositoryCredentials $repositoryCredentials
 * @property int $cpu
 * @property int $memory
 * @property int $memoryReservation
 * @property list<string> $links
 * @property list<PortMapping> $portMappings
 * @property bool $essential
 * @property ContainerRestartPolicy $restartPolicy
 * @property list<string> $entryPoint
 * @property list<string> $command
 * @property list<KeyValuePair> $environment
 * @property list<EnvironmentFile> $environmentFiles
 * @property list<MountPoint> $mountPoints
 * @property list<VolumeFrom> $volumesFrom
 * @property LinuxParameters $linuxParameters
 * @property list<Secret> $secrets
 * @property list<ContainerDependency> $dependsOn
 * @property int $startTimeout
 * @property int $stopTimeout
 * @property 'enabled'|'disabled' $versionConsistency
 * @property string $hostname
 * @property string $user
 * @property string $workingDirectory
 * @property bool $disableNetworking
 * @property bool $privileged
 * @property bool $readonlyRootFilesystem
 * @property list<string> $dnsServers
 * @property list<string> $dnsSearchDomains
 * @property list<HostEntry> $extraHosts
 * @property list<string> $dockerSecurityOptions
 * @property bool $interactive
 * @property bool $pseudoTerminal
 * @property array<string, string> $dockerLabels
 * @property list<Ulimit> $ulimits
 * @property LogConfiguration $logConfiguration
 * @property HealthCheck $healthCheck
 * @property list<SystemControl> $systemControls
 * @property list<ResourceRequirement> $resourceRequirements
 * @property FirelensConfiguration $firelensConfiguration
 * @property list<string> $credentialSpecs
 */
class ContainerDefinition extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     image?: string,
     *     repositoryCredentials?: RepositoryCredentials,
     *     cpu?: int,
     *     memory?: int,
     *     memoryReservation?: int,
     *     links?: list<string>,
     *     portMappings?: list<PortMapping>,
     *     essential?: bool,
     *     restartPolicy?: ContainerRestartPolicy,
     *     entryPoint?: list<string>,
     *     command?: list<string>,
     *     environment?: list<KeyValuePair>,
     *     environmentFiles?: list<EnvironmentFile>,
     *     mountPoints?: list<MountPoint>,
     *     volumesFrom?: list<VolumeFrom>,
     *     linuxParameters?: LinuxParameters,
     *     secrets?: list<Secret>,
     *     dependsOn?: list<ContainerDependency>,
     *     startTimeout?: int,
     *     stopTimeout?: int,
     *     versionConsistency?: 'enabled'|'disabled',
     *     hostname?: string,
     *     user?: string,
     *     workingDirectory?: string,
     *     disableNetworking?: bool,
     *     privileged?: bool,
     *     readonlyRootFilesystem?: bool,
     *     dnsServers?: list<string>,
     *     dnsSearchDomains?: list<string>,
     *     extraHosts?: list<HostEntry>,
     *     dockerSecurityOptions?: list<string>,
     *     interactive?: bool,
     *     pseudoTerminal?: bool,
     *     dockerLabels?: array<string, string>,
     *     ulimits?: list<Ulimit>,
     *     logConfiguration?: LogConfiguration,
     *     healthCheck?: HealthCheck,
     *     systemControls?: list<SystemControl>,
     *     resourceRequirements?: list<ResourceRequirement>,
     *     firelensConfiguration?: FirelensConfiguration,
     *     credentialSpecs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
