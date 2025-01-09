<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $description
 * @property ProjectSource $source
 * @property list<ProjectSource> $secondarySources
 * @property string $sourceVersion
 * @property list<ProjectSourceVersion> $secondarySourceVersions
 * @property ProjectArtifacts $artifacts
 * @property list<ProjectArtifacts> $secondaryArtifacts
 * @property ProjectCache $cache
 * @property ProjectEnvironment $environment
 * @property string $serviceRole
 * @property int $timeoutInMinutes
 * @property int $queuedTimeoutInMinutes
 * @property string $encryptionKey
 * @property list<Tag> $tags
 * @property \Aws\Api\DateTimeResult $created
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property Webhook $webhook
 * @property VpcConfig $vpcConfig
 * @property ProjectBadge $badge
 * @property LogsConfig $logsConfig
 * @property list<ProjectFileSystemLocation> $fileSystemLocations
 * @property ProjectBuildBatchConfig $buildBatchConfig
 * @property int $concurrentBuildLimit
 * @property 'PUBLIC_READ'|'PRIVATE' $projectVisibility
 * @property string $publicProjectAlias
 * @property string $resourceAccessRole
 * @property int $autoRetryLimit
 */
class Project extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     description?: string,
     *     source?: ProjectSource,
     *     secondarySources?: list<ProjectSource>,
     *     sourceVersion?: string,
     *     secondarySourceVersions?: list<ProjectSourceVersion>,
     *     artifacts?: ProjectArtifacts,
     *     secondaryArtifacts?: list<ProjectArtifacts>,
     *     cache?: ProjectCache,
     *     environment?: ProjectEnvironment,
     *     serviceRole?: string,
     *     timeoutInMinutes?: int,
     *     queuedTimeoutInMinutes?: int,
     *     encryptionKey?: string,
     *     tags?: list<Tag>,
     *     created?: \Aws\Api\DateTimeResult,
     *     lastModified?: \Aws\Api\DateTimeResult,
     *     webhook?: Webhook,
     *     vpcConfig?: VpcConfig,
     *     badge?: ProjectBadge,
     *     logsConfig?: LogsConfig,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>,
     *     buildBatchConfig?: ProjectBuildBatchConfig,
     *     concurrentBuildLimit?: int,
     *     projectVisibility?: 'PUBLIC_READ'|'PRIVATE',
     *     publicProjectAlias?: string,
     *     resourceAccessRole?: string,
     *     autoRetryLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
