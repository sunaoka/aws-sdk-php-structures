<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImageRecipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $semanticVersion
 * @property list<Shapes\ComponentConfiguration>|null $components
 * @property string $parentImage
 * @property list<Shapes\InstanceBlockDeviceMapping>|null $blockDeviceMappings
 * @property array<string, string>|null $tags
 * @property string|null $workingDirectory
 * @property Shapes\AdditionalInstanceConfiguration|null $additionalInstanceConfiguration
 * @property array<string, string>|null $amiTags
 * @property string $clientToken
 */
class CreateImageRecipeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     semanticVersion: string,
     *     components?: list<Shapes\ComponentConfiguration>|null,
     *     parentImage: string,
     *     blockDeviceMappings?: list<Shapes\InstanceBlockDeviceMapping>|null,
     *     tags?: array<string, string>|null,
     *     workingDirectory?: string|null,
     *     additionalInstanceConfiguration?: Shapes\AdditionalInstanceConfiguration|null,
     *     amiTags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
