<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property int $vcpus
 * @property int $memory
 * @property list<string> $command
 * @property string $jobRoleArn
 * @property string $executionRoleArn
 * @property list<Volume> $volumes
 * @property list<KeyValuePair> $environment
 * @property list<MountPoint> $mountPoints
 * @property bool $readonlyRootFilesystem
 * @property bool $privileged
 * @property list<Ulimit> $ulimits
 * @property string $user
 * @property string $instanceType
 * @property list<ResourceRequirement> $resourceRequirements
 * @property LinuxParameters $linuxParameters
 * @property LogConfiguration $logConfiguration
 * @property list<Secret> $secrets
 * @property NetworkConfiguration $networkConfiguration
 * @property FargatePlatformConfiguration $fargatePlatformConfiguration
 * @property EphemeralStorage $ephemeralStorage
 * @property RuntimePlatform $runtimePlatform
 * @property RepositoryCredentials $repositoryCredentials
 */
class ContainerProperties extends Shape
{
    /**
     * @param array{
     *     image?: string,
     *     vcpus?: int,
     *     memory?: int,
     *     command?: list<string>,
     *     jobRoleArn?: string,
     *     executionRoleArn?: string,
     *     volumes?: list<Volume>,
     *     environment?: list<KeyValuePair>,
     *     mountPoints?: list<MountPoint>,
     *     readonlyRootFilesystem?: bool,
     *     privileged?: bool,
     *     ulimits?: list<Ulimit>,
     *     user?: string,
     *     instanceType?: string,
     *     resourceRequirements?: list<ResourceRequirement>,
     *     linuxParameters?: LinuxParameters,
     *     logConfiguration?: LogConfiguration,
     *     secrets?: list<Secret>,
     *     networkConfiguration?: NetworkConfiguration,
     *     fargatePlatformConfiguration?: FargatePlatformConfiguration,
     *     ephemeralStorage?: EphemeralStorage,
     *     runtimePlatform?: RuntimePlatform,
     *     repositoryCredentials?: RepositoryCredentials
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
