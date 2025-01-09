<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $command
 * @property list<TaskContainerDependency> $dependsOn
 * @property list<KeyValuePair> $environment
 * @property bool $essential
 * @property string $image
 * @property LinuxParameters $linuxParameters
 * @property LogConfiguration $logConfiguration
 * @property list<MountPoint> $mountPoints
 * @property string $name
 * @property bool $privileged
 * @property bool $readonlyRootFilesystem
 * @property RepositoryCredentials $repositoryCredentials
 * @property list<ResourceRequirement> $resourceRequirements
 * @property list<Secret> $secrets
 * @property list<Ulimit> $ulimits
 * @property string $user
 */
class TaskContainerProperties extends Shape
{
    /**
     * @param array{
     *     command?: list<string>,
     *     dependsOn?: list<TaskContainerDependency>,
     *     environment?: list<KeyValuePair>,
     *     essential?: bool,
     *     image: string,
     *     linuxParameters?: LinuxParameters,
     *     logConfiguration?: LogConfiguration,
     *     mountPoints?: list<MountPoint>,
     *     name?: string,
     *     privileged?: bool,
     *     readonlyRootFilesystem?: bool,
     *     repositoryCredentials?: RepositoryCredentials,
     *     resourceRequirements?: list<ResourceRequirement>,
     *     secrets?: list<Secret>,
     *     ulimits?: list<Ulimit>,
     *     user?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
