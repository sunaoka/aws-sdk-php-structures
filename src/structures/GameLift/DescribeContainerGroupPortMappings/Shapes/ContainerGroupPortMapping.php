<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupPortMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property string|null $ContainerRuntimeId
 * @property list<ContainerPortMapping>|null $ContainerPortMappings
 */
class ContainerGroupPortMapping extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     ContainerRuntimeId?: string|null,
     *     ContainerPortMappings?: list<ContainerPortMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
