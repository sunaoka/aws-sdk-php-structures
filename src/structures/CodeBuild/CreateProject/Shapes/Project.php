<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $description
 * @property ProjectSource|null $source
 * @property list<ProjectSource>|null $secondarySources
 * @property string|null $sourceVersion
 * @property list<ProjectSourceVersion>|null $secondarySourceVersions
 * @property ProjectArtifacts|null $artifacts
 * @property list<ProjectArtifacts>|null $secondaryArtifacts
 * @property ProjectCache|null $cache
 * @property ProjectEnvironment|null $environment
 * @property string|null $serviceRole
 * @property int<5, 2160>|null $timeoutInMinutes
 * @property int<5, 480>|null $queuedTimeoutInMinutes
 * @property string|null $encryptionKey
 * @property list<Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $created
 * @property \Aws\Api\DateTimeResult|null $lastModified
 * @property Webhook|null $webhook
 * @property VpcConfig|null $vpcConfig
 * @property ProjectBadge|null $badge
 * @property LogsConfig|null $logsConfig
 * @property list<ProjectFileSystemLocation>|null $fileSystemLocations
 * @property ProjectBuildBatchConfig|null $buildBatchConfig
 * @property int|null $concurrentBuildLimit
 * @property 'PUBLIC_READ'|'PRIVATE'|null $projectVisibility
 * @property string|null $publicProjectAlias
 * @property string|null $resourceAccessRole
 * @property int|null $autoRetryLimit
 */
class Project extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     description?: string|null,
     *     source?: ProjectSource|null,
     *     secondarySources?: list<ProjectSource>|null,
     *     sourceVersion?: string|null,
     *     secondarySourceVersions?: list<ProjectSourceVersion>|null,
     *     artifacts?: ProjectArtifacts|null,
     *     secondaryArtifacts?: list<ProjectArtifacts>|null,
     *     cache?: ProjectCache|null,
     *     environment?: ProjectEnvironment|null,
     *     serviceRole?: string|null,
     *     timeoutInMinutes?: int<5, 2160>|null,
     *     queuedTimeoutInMinutes?: int<5, 480>|null,
     *     encryptionKey?: string|null,
     *     tags?: list<Tag>|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     lastModified?: \Aws\Api\DateTimeResult|null,
     *     webhook?: Webhook|null,
     *     vpcConfig?: VpcConfig|null,
     *     badge?: ProjectBadge|null,
     *     logsConfig?: LogsConfig|null,
     *     fileSystemLocations?: list<ProjectFileSystemLocation>|null,
     *     buildBatchConfig?: ProjectBuildBatchConfig|null,
     *     concurrentBuildLimit?: int|null,
     *     projectVisibility?: 'PUBLIC_READ'|'PRIVATE'|null,
     *     publicProjectAlias?: string|null,
     *     resourceAccessRole?: string|null,
     *     autoRetryLimit?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
