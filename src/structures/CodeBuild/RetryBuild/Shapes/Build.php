<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property int $buildNumber
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $currentPhase
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED' $buildStatus
 * @property string $sourceVersion
 * @property string $resolvedSourceVersion
 * @property string $projectName
 * @property list<BuildPhase> $phases
 * @property ProjectSource $source
 * @property list<ProjectSource> $secondarySources
 * @property list<ProjectSourceVersion> $secondarySourceVersions
 * @property BuildArtifacts $artifacts
 * @property list<BuildArtifacts> $secondaryArtifacts
 * @property ProjectCache $cache
 * @property ProjectEnvironment $environment
 * @property string $serviceRole
 * @property LogsLocation $logs
 * @property int $timeoutInMinutes
 * @property int $queuedTimeoutInMinutes
 * @property bool $buildComplete
 * @property string $initiator
 * @property VpcConfig $vpcConfig
 * @property NetworkInterface $networkInterface
 * @property string $encryptionKey
 * @property list<ExportedEnvironmentVariable> $exportedEnvironmentVariables
 * @property list<string> $reportArns
 * @property list<ProjectFileSystemLocation> $fileSystemLocations
 * @property DebugSession $debugSession
 * @property string $buildBatchArn
 * @property AutoRetryConfig $autoRetryConfig
 */
class Build extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     buildNumber?: int,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     currentPhase?: string,
     *     buildStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED',
     *     sourceVersion?: string,
     *     resolvedSourceVersion?: string,
     *     projectName?: string,
     *     phases?: list<BuildPhase>,
     *     source?: ProjectSource,
     *     secondarySources?: list<ProjectSource>,
     *     secondarySourceVersions?: list<ProjectSourceVersion>,
     *     artifacts?: BuildArtifacts,
     *     secondaryArtifacts?: list<BuildArtifacts>,
     *     cache?: ProjectCache,
     *     environment?: ProjectEnvironment,
     *     serviceRole?: string,
     *     logs?: LogsLocation,
     *     timeoutInMinutes?: int,
     *     queuedTimeoutInMinutes?: int,
     *     buildComplete?: bool,
     *     initiator?: string,
     *     vpcConfig?: VpcConfig,
     *     networkInterface?: NetworkInterface,
     *     encryptionKey?: string,
     *     exportedEnvironmentVariables?: list<ExportedEnvironmentVariable>,
     *     reportArns?: list<string>,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>,
     *     debugSession?: DebugSession,
     *     buildBatchArn?: string,
     *     autoRetryConfig?: AutoRetryConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
