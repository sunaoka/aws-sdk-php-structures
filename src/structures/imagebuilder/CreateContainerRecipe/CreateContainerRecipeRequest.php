<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateContainerRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DOCKER' $containerType
 * @property string $name
 * @property string|null $description
 * @property string $semanticVersion
 * @property list<Shapes\ComponentConfiguration> $components
 * @property Shapes\InstanceConfiguration|null $instanceConfiguration
 * @property string|null $dockerfileTemplateData
 * @property string|null $dockerfileTemplateUri
 * @property 'Windows'|'Linux'|'macOS'|null $platformOverride
 * @property string|null $imageOsVersionOverride
 * @property string $parentImage
 * @property array<string, string>|null $tags
 * @property string|null $workingDirectory
 * @property Shapes\TargetContainerRepository $targetRepository
 * @property string|null $kmsKeyId
 * @property string $clientToken
 */
class CreateContainerRecipeRequest extends Request
{
    /**
     * @param array{
     *     containerType: 'DOCKER',
     *     name: string,
     *     description?: string|null,
     *     semanticVersion: string,
     *     components: list<Shapes\ComponentConfiguration>,
     *     instanceConfiguration?: Shapes\InstanceConfiguration|null,
     *     dockerfileTemplateData?: string|null,
     *     dockerfileTemplateUri?: string|null,
     *     platformOverride?: 'Windows'|'Linux'|'macOS'|null,
     *     imageOsVersionOverride?: string|null,
     *     parentImage: string,
     *     tags?: array<string, string>|null,
     *     workingDirectory?: string|null,
     *     targetRepository: Shapes\TargetContainerRepository,
     *     kmsKeyId?: string|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
