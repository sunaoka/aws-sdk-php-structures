<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'AMI'|'DOCKER' $type
 * @property string $name
 * @property string $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property string $owner
 * @property string $version
 * @property list<ComponentConfiguration> $components
 * @property string $parentImage
 * @property list<InstanceBlockDeviceMapping> $blockDeviceMappings
 * @property string $dateCreated
 * @property array<string, string> $tags
 * @property string $workingDirectory
 * @property AdditionalInstanceConfiguration $additionalInstanceConfiguration
 */
class ImageRecipe extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     type?: 'AMI'|'DOCKER',
     *     name?: string,
     *     description?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     owner?: string,
     *     version?: string,
     *     components?: list<ComponentConfiguration>,
     *     parentImage?: string,
     *     blockDeviceMappings?: list<InstanceBlockDeviceMapping>,
     *     dateCreated?: string,
     *     tags?: array<string, string>,
     *     workingDirectory?: string,
     *     additionalInstanceConfiguration?: AdditionalInstanceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
