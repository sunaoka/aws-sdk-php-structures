<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImageRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $semanticVersion
 * @property list<Shapes\ComponentConfiguration> $components
 * @property string $parentImage
 * @property list<Shapes\InstanceBlockDeviceMapping> $blockDeviceMappings
 * @property array<string, string> $tags
 * @property string $workingDirectory
 * @property Shapes\AdditionalInstanceConfiguration $additionalInstanceConfiguration
 * @property string $clientToken
 */
class CreateImageRecipeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     semanticVersion: string,
     *     components: list<Shapes\ComponentConfiguration>,
     *     parentImage: string,
     *     blockDeviceMappings?: list<Shapes\InstanceBlockDeviceMapping>,
     *     tags?: array<string, string>,
     *     workingDirectory?: string,
     *     additionalInstanceConfiguration?: Shapes\AdditionalInstanceConfiguration,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
