<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $projectName
 * @property \Aws\Api\DateTimeResult|null $requestTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $status
 * @property ProjectSource|null $source
 * @property string|null $sourceVersion
 * @property list<ProjectSource>|null $secondarySources
 * @property list<ProjectSourceVersion>|null $secondarySourceVersions
 * @property ProjectEnvironment|null $environment
 * @property list<ProjectFileSystemLocation>|null $fileSystemLocations
 * @property int|null $timeoutInMinutes
 * @property int|null $queuedTimeoutInMinutes
 * @property VpcConfig|null $vpcConfig
 * @property LogsConfig|null $logConfig
 * @property string|null $encryptionKey
 * @property string|null $serviceRole
 * @property SandboxSession|null $currentSession
 */
class Sandbox extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     projectName?: string|null,
     *     requestTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null,
     *     source?: ProjectSource|null,
     *     sourceVersion?: string|null,
     *     secondarySources?: list<ProjectSource>|null,
     *     secondarySourceVersions?: list<ProjectSourceVersion>|null,
     *     environment?: ProjectEnvironment|null,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>|null,
     *     timeoutInMinutes?: int|null,
     *     queuedTimeoutInMinutes?: int|null,
     *     vpcConfig?: VpcConfig|null,
     *     logConfig?: LogsConfig|null,
     *     encryptionKey?: string|null,
     *     serviceRole?: string|null,
     *     currentSession?: SandboxSession|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
