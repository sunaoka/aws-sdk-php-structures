<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $currentPhase
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $buildBatchStatus
 * @property string|null $sourceVersion
 * @property string|null $resolvedSourceVersion
 * @property string|null $projectName
 * @property list<BuildBatchPhase>|null $phases
 * @property ProjectSource|null $source
 * @property list<ProjectSource>|null $secondarySources
 * @property list<ProjectSourceVersion>|null $secondarySourceVersions
 * @property BuildArtifacts|null $artifacts
 * @property list<BuildArtifacts>|null $secondaryArtifacts
 * @property ProjectCache|null $cache
 * @property ProjectEnvironment|null $environment
 * @property string|null $serviceRole
 * @property LogsConfig|null $logConfig
 * @property int|null $buildTimeoutInMinutes
 * @property int|null $queuedTimeoutInMinutes
 * @property bool|null $complete
 * @property string|null $initiator
 * @property VpcConfig|null $vpcConfig
 * @property string|null $encryptionKey
 * @property int|null $buildBatchNumber
 * @property list<ProjectFileSystemLocation>|null $fileSystemLocations
 * @property ProjectBuildBatchConfig|null $buildBatchConfig
 * @property list<BuildGroup>|null $buildGroups
 * @property bool|null $debugSessionEnabled
 */
class BuildBatch extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     currentPhase?: string|null,
     *     buildBatchStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null,
     *     sourceVersion?: string|null,
     *     resolvedSourceVersion?: string|null,
     *     projectName?: string|null,
     *     phases?: list<BuildBatchPhase>|null,
     *     source?: ProjectSource|null,
     *     secondarySources?: list<ProjectSource>|null,
     *     secondarySourceVersions?: list<ProjectSourceVersion>|null,
     *     artifacts?: BuildArtifacts|null,
     *     secondaryArtifacts?: list<BuildArtifacts>|null,
     *     cache?: ProjectCache|null,
     *     environment?: ProjectEnvironment|null,
     *     serviceRole?: string|null,
     *     logConfig?: LogsConfig|null,
     *     buildTimeoutInMinutes?: int|null,
     *     queuedTimeoutInMinutes?: int|null,
     *     complete?: bool|null,
     *     initiator?: string|null,
     *     vpcConfig?: VpcConfig|null,
     *     encryptionKey?: string|null,
     *     buildBatchNumber?: int|null,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>|null,
     *     buildBatchConfig?: ProjectBuildBatchConfig|null,
     *     buildGroups?: list<BuildGroup>|null,
     *     debugSessionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
