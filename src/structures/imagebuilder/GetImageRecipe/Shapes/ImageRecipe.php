<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'AMI'|'DOCKER'|null $type
 * @property string|null $name
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property string|null $owner
 * @property string|null $version
 * @property list<ComponentConfiguration>|null $components
 * @property string|null $parentImage
 * @property list<InstanceBlockDeviceMapping>|null $blockDeviceMappings
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 * @property string|null $workingDirectory
 * @property AdditionalInstanceConfiguration|null $additionalInstanceConfiguration
 */
class ImageRecipe extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     type?: 'AMI'|'DOCKER'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     owner?: string|null,
     *     version?: string|null,
     *     components?: list<ComponentConfiguration>|null,
     *     parentImage?: string|null,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null,
     *     workingDirectory?: string|null,
     *     additionalInstanceConfiguration?: AdditionalInstanceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
