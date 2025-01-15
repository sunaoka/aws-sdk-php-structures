<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\ProjectSource|null $source
 * @property list<Shapes\ProjectSource>|null $secondarySources
 * @property string|null $sourceVersion
 * @property list<Shapes\ProjectSourceVersion>|null $secondarySourceVersions
 * @property Shapes\ProjectArtifacts|null $artifacts
 * @property list<Shapes\ProjectArtifacts>|null $secondaryArtifacts
 * @property Shapes\ProjectCache|null $cache
 * @property Shapes\ProjectEnvironment|null $environment
 * @property string|null $serviceRole
 * @property int<5, 2160>|null $timeoutInMinutes
 * @property int<5, 480>|null $queuedTimeoutInMinutes
 * @property string|null $encryptionKey
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property bool|null $badgeEnabled
 * @property Shapes\LogsConfig|null $logsConfig
 * @property list<Shapes\ProjectFileSystemLocation>|null $fileSystemLocations
 * @property Shapes\ProjectBuildBatchConfig|null $buildBatchConfig
 * @property int|null $concurrentBuildLimit
 * @property int|null $autoRetryLimit
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     source?: Shapes\ProjectSource|null,
     *     secondarySources?: list<Shapes\ProjectSource>|null,
     *     sourceVersion?: string|null,
     *     secondarySourceVersions?: list<Shapes\ProjectSourceVersion>|null,
     *     artifacts?: Shapes\ProjectArtifacts|null,
     *     secondaryArtifacts?: list<Shapes\ProjectArtifacts>|null,
     *     cache?: Shapes\ProjectCache|null,
     *     environment?: Shapes\ProjectEnvironment|null,
     *     serviceRole?: string|null,
     *     timeoutInMinutes?: int<5, 2160>|null,
     *     queuedTimeoutInMinutes?: int<5, 480>|null,
     *     encryptionKey?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     badgeEnabled?: bool|null,
     *     logsConfig?: Shapes\LogsConfig|null,
     *     fileSystemLocations?: list<Shapes\ProjectFileSystemLocation>|null,
     *     buildBatchConfig?: Shapes\ProjectBuildBatchConfig|null,
     *     concurrentBuildLimit?: int|null,
     *     autoRetryLimit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
