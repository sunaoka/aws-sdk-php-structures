<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'DOCKER'|null $containerType
 * @property string|null $name
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property string|null $owner
 * @property string|null $version
 * @property list<ComponentConfiguration>|null $components
 * @property InstanceConfiguration|null $instanceConfiguration
 * @property string|null $dockerfileTemplateData
 * @property string|null $kmsKeyId
 * @property bool|null $encrypted
 * @property string|null $parentImage
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 * @property string|null $workingDirectory
 * @property TargetContainerRepository|null $targetRepository
 */
class ContainerRecipe extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     containerType?: 'DOCKER'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     owner?: string|null,
     *     version?: string|null,
     *     components?: list<ComponentConfiguration>|null,
     *     instanceConfiguration?: InstanceConfiguration|null,
     *     dockerfileTemplateData?: string|null,
     *     kmsKeyId?: string|null,
     *     encrypted?: bool|null,
     *     parentImage?: string|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null,
     *     workingDirectory?: string|null,
     *     targetRepository?: TargetContainerRepository|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
