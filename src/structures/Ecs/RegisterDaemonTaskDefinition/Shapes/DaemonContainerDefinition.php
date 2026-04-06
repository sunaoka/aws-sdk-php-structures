<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterDaemonTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $image
 * @property int|null $memory
 * @property int|null $memoryReservation
 * @property RepositoryCredentials|null $repositoryCredentials
 * @property HealthCheck|null $healthCheck
 * @property int|null $cpu
 * @property bool|null $essential
 * @property list<string>|null $entryPoint
 * @property list<string>|null $command
 * @property string|null $workingDirectory
 * @property list<EnvironmentFile>|null $environmentFiles
 * @property list<KeyValuePair>|null $environment
 * @property list<Secret>|null $secrets
 * @property bool|null $readonlyRootFilesystem
 * @property list<MountPoint>|null $mountPoints
 * @property LogConfiguration|null $logConfiguration
 * @property FirelensConfiguration|null $firelensConfiguration
 * @property bool|null $privileged
 * @property string|null $user
 * @property list<Ulimit>|null $ulimits
 * @property DaemonLinuxParameters|null $linuxParameters
 * @property list<ContainerDependency>|null $dependsOn
 * @property int|null $startTimeout
 * @property int|null $stopTimeout
 * @property list<SystemControl>|null $systemControls
 * @property bool|null $interactive
 * @property bool|null $pseudoTerminal
 * @property ContainerRestartPolicy|null $restartPolicy
 */
class DaemonContainerDefinition extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     image: string,
     *     memory?: int|null,
     *     memoryReservation?: int|null,
     *     repositoryCredentials?: RepositoryCredentials|null,
     *     healthCheck?: HealthCheck|null,
     *     cpu?: int|null,
     *     essential?: bool|null,
     *     entryPoint?: list<string>|null,
     *     command?: list<string>|null,
     *     workingDirectory?: string|null,
     *     environmentFiles?: list<EnvironmentFile>|null,
     *     environment?: list<KeyValuePair>|null,
     *     secrets?: list<Secret>|null,
     *     readonlyRootFilesystem?: bool|null,
     *     mountPoints?: list<MountPoint>|null,
     *     logConfiguration?: LogConfiguration|null,
     *     firelensConfiguration?: FirelensConfiguration|null,
     *     privileged?: bool|null,
     *     user?: string|null,
     *     ulimits?: list<Ulimit>|null,
     *     linuxParameters?: DaemonLinuxParameters|null,
     *     dependsOn?: list<ContainerDependency>|null,
     *     startTimeout?: int|null,
     *     stopTimeout?: int|null,
     *     systemControls?: list<SystemControl>|null,
     *     interactive?: bool|null,
     *     pseudoTerminal?: bool|null,
     *     restartPolicy?: ContainerRestartPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
