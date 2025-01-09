<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'DOCKER' $containerType
 * @property string $name
 * @property string $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $owner
 * @property string $version
 * @property list<ComponentConfiguration> $components
 * @property InstanceConfiguration $instanceConfiguration
 * @property string $dockerfileTemplateData
 * @property string $kmsKeyId
 * @property bool $encrypted
 * @property string $parentImage
 * @property string $dateCreated
 * @property array<string, string> $tags
 * @property string $workingDirectory
 * @property TargetContainerRepository $targetRepository
 */
class ContainerRecipe extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     containerType?: 'DOCKER',
     *     name?: string,
     *     description?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     owner?: string,
     *     version?: string,
     *     components?: list<ComponentConfiguration>,
     *     instanceConfiguration?: InstanceConfiguration,
     *     dockerfileTemplateData?: string,
     *     kmsKeyId?: string,
     *     encrypted?: bool,
     *     parentImage?: string,
     *     dateCreated?: string,
     *     tags?: array<string, string>,
     *     workingDirectory?: string,
     *     targetRepository?: TargetContainerRepository
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
