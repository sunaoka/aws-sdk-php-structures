<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\ProjectSource $source
 * @property list<Shapes\ProjectSource> $secondarySources
 * @property string $sourceVersion
 * @property list<Shapes\ProjectSourceVersion> $secondarySourceVersions
 * @property Shapes\ProjectArtifacts $artifacts
 * @property list<Shapes\ProjectArtifacts> $secondaryArtifacts
 * @property Shapes\ProjectCache $cache
 * @property Shapes\ProjectEnvironment $environment
 * @property string $serviceRole
 * @property int $timeoutInMinutes
 * @property int $queuedTimeoutInMinutes
 * @property string $encryptionKey
 * @property list<Shapes\Tag> $tags
 * @property Shapes\VpcConfig $vpcConfig
 * @property bool $badgeEnabled
 * @property Shapes\LogsConfig $logsConfig
 * @property list<Shapes\ProjectFileSystemLocation> $fileSystemLocations
 * @property Shapes\ProjectBuildBatchConfig $buildBatchConfig
 * @property int $concurrentBuildLimit
 * @property int $autoRetryLimit
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     source: Shapes\ProjectSource,
     *     secondarySources?: list<Shapes\ProjectSource>,
     *     sourceVersion?: string,
     *     secondarySourceVersions?: list<Shapes\ProjectSourceVersion>,
     *     artifacts: Shapes\ProjectArtifacts,
     *     secondaryArtifacts?: list<Shapes\ProjectArtifacts>,
     *     cache?: Shapes\ProjectCache,
     *     environment: Shapes\ProjectEnvironment,
     *     serviceRole: string,
     *     timeoutInMinutes?: int,
     *     queuedTimeoutInMinutes?: int,
     *     encryptionKey?: string,
     *     tags?: list<Shapes\Tag>,
     *     vpcConfig?: Shapes\VpcConfig,
     *     badgeEnabled?: bool,
     *     logsConfig?: Shapes\LogsConfig,
     *     fileSystemLocations?: list<Shapes\ProjectFileSystemLocation>,
     *     buildBatchConfig?: Shapes\ProjectBuildBatchConfig,
     *     concurrentBuildLimit?: int,
     *     autoRetryLimit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
