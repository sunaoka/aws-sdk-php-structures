<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerPath
 * @property list<string> $MountOptions
 * @property int $Size
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersTmpfsDetails extends Shape
{
    /**
     * @param array{
     *     ContainerPath?: string,
     *     MountOptions?: list<string>,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
