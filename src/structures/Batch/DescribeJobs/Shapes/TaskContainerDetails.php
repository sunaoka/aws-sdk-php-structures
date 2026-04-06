<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $command
 * @property list<TaskContainerDependency>|null $dependsOn
 * @property list<KeyValuePair>|null $environment
 * @property bool|null $essential
 * @property FirelensConfiguration|null $firelensConfiguration
 * @property string|null $image
 * @property LinuxParameters|null $linuxParameters
 * @property LogConfiguration|null $logConfiguration
 * @property list<MountPoint>|null $mountPoints
 * @property string|null $name
 * @property bool|null $privileged
 * @property bool|null $readonlyRootFilesystem
 * @property RepositoryCredentials|null $repositoryCredentials
 * @property list<ResourceRequirement>|null $resourceRequirements
 * @property list<Secret>|null $secrets
 * @property list<Ulimit>|null $ulimits
 * @property string|null $user
 * @property int|null $exitCode
 * @property string|null $reason
 * @property string|null $logStreamName
 * @property list<NetworkInterface>|null $networkInterfaces
 */
class TaskContainerDetails extends Shape
{
    /**
     * @param array{
     *     command?: list<string>|null,
     *     dependsOn?: list<TaskContainerDependency>|null,
     *     environment?: list<KeyValuePair>|null,
     *     essential?: bool|null,
     *     firelensConfiguration?: FirelensConfiguration|null,
     *     image?: string|null,
     *     linuxParameters?: LinuxParameters|null,
     *     logConfiguration?: LogConfiguration|null,
     *     mountPoints?: list<MountPoint>|null,
     *     name?: string|null,
     *     privileged?: bool|null,
     *     readonlyRootFilesystem?: bool|null,
     *     repositoryCredentials?: RepositoryCredentials|null,
     *     resourceRequirements?: list<ResourceRequirement>|null,
     *     secrets?: list<Secret>|null,
     *     ulimits?: list<Ulimit>|null,
     *     user?: string|null,
     *     exitCode?: int|null,
     *     reason?: string|null,
     *     logStreamName?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
