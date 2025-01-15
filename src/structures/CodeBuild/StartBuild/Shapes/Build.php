<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property int|null $buildNumber
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $currentPhase
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $buildStatus
 * @property string|null $sourceVersion
 * @property string|null $resolvedSourceVersion
 * @property string|null $projectName
 * @property list<BuildPhase>|null $phases
 * @property ProjectSource|null $source
 * @property list<ProjectSource>|null $secondarySources
 * @property list<ProjectSourceVersion>|null $secondarySourceVersions
 * @property BuildArtifacts|null $artifacts
 * @property list<BuildArtifacts>|null $secondaryArtifacts
 * @property ProjectCache|null $cache
 * @property ProjectEnvironment|null $environment
 * @property string|null $serviceRole
 * @property LogsLocation|null $logs
 * @property int|null $timeoutInMinutes
 * @property int|null $queuedTimeoutInMinutes
 * @property bool|null $buildComplete
 * @property string|null $initiator
 * @property VpcConfig|null $vpcConfig
 * @property NetworkInterface|null $networkInterface
 * @property string|null $encryptionKey
 * @property list<ExportedEnvironmentVariable>|null $exportedEnvironmentVariables
 * @property list<string>|null $reportArns
 * @property list<ProjectFileSystemLocation>|null $fileSystemLocations
 * @property DebugSession|null $debugSession
 * @property string|null $buildBatchArn
 * @property AutoRetryConfig|null $autoRetryConfig
 */
class Build extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     buildNumber?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     currentPhase?: string|null,
     *     buildStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null,
     *     sourceVersion?: string|null,
     *     resolvedSourceVersion?: string|null,
     *     projectName?: string|null,
     *     phases?: list<BuildPhase>|null,
     *     source?: ProjectSource|null,
     *     secondarySources?: list<ProjectSource>|null,
     *     secondarySourceVersions?: list<ProjectSourceVersion>|null,
     *     artifacts?: BuildArtifacts|null,
     *     secondaryArtifacts?: list<BuildArtifacts>|null,
     *     cache?: ProjectCache|null,
     *     environment?: ProjectEnvironment|null,
     *     serviceRole?: string|null,
     *     logs?: LogsLocation|null,
     *     timeoutInMinutes?: int|null,
     *     queuedTimeoutInMinutes?: int|null,
     *     buildComplete?: bool|null,
     *     initiator?: string|null,
     *     vpcConfig?: VpcConfig|null,
     *     networkInterface?: NetworkInterface|null,
     *     encryptionKey?: string|null,
     *     exportedEnvironmentVariables?: list<ExportedEnvironmentVariable>|null,
     *     reportArns?: list<string>|null,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>|null,
     *     debugSession?: DebugSession|null,
     *     buildBatchArn?: string|null,
     *     autoRetryConfig?: AutoRetryConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
