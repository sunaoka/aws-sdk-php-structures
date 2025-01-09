<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateContainerRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DOCKER' $containerType
 * @property string $name
 * @property string $description
 * @property string $semanticVersion
 * @property list<Shapes\ComponentConfiguration> $components
 * @property Shapes\InstanceConfiguration $instanceConfiguration
 * @property string $dockerfileTemplateData
 * @property string $dockerfileTemplateUri
 * @property 'Windows'|'Linux'|'macOS' $platformOverride
 * @property string $imageOsVersionOverride
 * @property string $parentImage
 * @property array<string, string> $tags
 * @property string $workingDirectory
 * @property Shapes\TargetContainerRepository $targetRepository
 * @property string $kmsKeyId
 * @property string $clientToken
 */
class CreateContainerRecipeRequest extends Request
{
    /**
     * @param array{
     *     containerType: 'DOCKER',
     *     name: string,
     *     description?: string,
     *     semanticVersion: string,
     *     components: list<Shapes\ComponentConfiguration>,
     *     instanceConfiguration?: Shapes\InstanceConfiguration,
     *     dockerfileTemplateData?: string,
     *     dockerfileTemplateUri?: string,
     *     platformOverride?: 'Windows'|'Linux'|'macOS',
     *     imageOsVersionOverride?: string,
     *     parentImage: string,
     *     tags?: array<string, string>,
     *     workingDirectory?: string,
     *     targetRepository: Shapes\TargetContainerRepository,
     *     kmsKeyId?: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
