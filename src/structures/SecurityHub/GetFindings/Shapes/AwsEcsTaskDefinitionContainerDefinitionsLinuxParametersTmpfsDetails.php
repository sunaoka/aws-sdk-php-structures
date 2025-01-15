<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerPath
 * @property list<string>|null $MountOptions
 * @property int|null $Size
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string|null,
     *     MountOptions?: list<string>|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
