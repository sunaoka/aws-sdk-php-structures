<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $currentPhase
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED' $buildBatchStatus
 * @property string $sourceVersion
 * @property string $resolvedSourceVersion
 * @property string $projectName
 * @property list<BuildBatchPhase> $phases
 * @property ProjectSource $source
 * @property list<ProjectSource> $secondarySources
 * @property list<ProjectSourceVersion> $secondarySourceVersions
 * @property BuildArtifacts $artifacts
 * @property list<BuildArtifacts> $secondaryArtifacts
 * @property ProjectCache $cache
 * @property ProjectEnvironment $environment
 * @property string $serviceRole
 * @property LogsConfig $logConfig
 * @property int $buildTimeoutInMinutes
 * @property int $queuedTimeoutInMinutes
 * @property bool $complete
 * @property string $initiator
 * @property VpcConfig $vpcConfig
 * @property string $encryptionKey
 * @property int $buildBatchNumber
 * @property list<ProjectFileSystemLocation> $fileSystemLocations
 * @property ProjectBuildBatchConfig $buildBatchConfig
 * @property list<BuildGroup> $buildGroups
 * @property bool $debugSessionEnabled
 */
class BuildBatch extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     currentPhase?: string,
     *     buildBatchStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED',
     *     sourceVersion?: string,
     *     resolvedSourceVersion?: string,
     *     projectName?: string,
     *     phases?: list<BuildBatchPhase>,
     *     source?: ProjectSource,
     *     secondarySources?: list<ProjectSource>,
     *     secondarySourceVersions?: list<ProjectSourceVersion>,
     *     artifacts?: BuildArtifacts,
     *     secondaryArtifacts?: list<BuildArtifacts>,
     *     cache?: ProjectCache,
     *     environment?: ProjectEnvironment,
     *     serviceRole?: string,
     *     logConfig?: LogsConfig,
     *     buildTimeoutInMinutes?: int,
     *     queuedTimeoutInMinutes?: int,
     *     complete?: bool,
     *     initiator?: string,
     *     vpcConfig?: VpcConfig,
     *     encryptionKey?: string,
     *     buildBatchNumber?: int,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>,
     *     buildBatchConfig?: ProjectBuildBatchConfig,
     *     buildGroups?: list<BuildGroup>,
     *     debugSessionEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
