<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $image
 * @property int|null $vcpus
 * @property int|null $memory
 * @property list<string>|null $command
 * @property string|null $jobRoleArn
 * @property string|null $executionRoleArn
 * @property list<Volume>|null $volumes
 * @property list<KeyValuePair>|null $environment
 * @property list<MountPoint>|null $mountPoints
 * @property bool|null $readonlyRootFilesystem
 * @property list<Ulimit>|null $ulimits
 * @property bool|null $privileged
 * @property string|null $user
 * @property int|null $exitCode
 * @property string|null $reason
 * @property string|null $containerInstanceArn
 * @property string|null $taskArn
 * @property string|null $logStreamName
 * @property string|null $instanceType
 * @property list<NetworkInterface>|null $networkInterfaces
 * @property list<ResourceRequirement>|null $resourceRequirements
 * @property LinuxParameters|null $linuxParameters
 * @property LogConfiguration|null $logConfiguration
 * @property list<Secret>|null $secrets
 * @property NetworkConfiguration|null $networkConfiguration
 * @property FargatePlatformConfiguration|null $fargatePlatformConfiguration
 * @property EphemeralStorage|null $ephemeralStorage
 * @property RuntimePlatform|null $runtimePlatform
 * @property RepositoryCredentials|null $repositoryCredentials
 */
class ContainerDetail extends Shape
{
    /**
     * @param array{
     *     image?: string|null,
     *     vcpus?: int|null,
     *     memory?: int|null,
     *     command?: list<string>|null,
     *     jobRoleArn?: string|null,
     *     executionRoleArn?: string|null,
     *     volumes?: list<Volume>|null,
     *     environment?: list<KeyValuePair>|null,
     *     mountPoints?: list<MountPoint>|null,
     *     readonlyRootFilesystem?: bool|null,
     *     ulimits?: list<Ulimit>|null,
     *     privileged?: bool|null,
     *     user?: string|null,
     *     exitCode?: int|null,
     *     reason?: string|null,
     *     containerInstanceArn?: string|null,
     *     taskArn?: string|null,
     *     logStreamName?: string|null,
     *     instanceType?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null,
     *     resourceRequirements?: list<ResourceRequirement>|null,
     *     linuxParameters?: LinuxParameters|null,
     *     logConfiguration?: LogConfiguration|null,
     *     secrets?: list<Secret>|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     fargatePlatformConfiguration?: FargatePlatformConfiguration|null,
     *     ephemeralStorage?: EphemeralStorage|null,
     *     runtimePlatform?: RuntimePlatform|null,
     *     repositoryCredentials?: RepositoryCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
