<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstancePath
 * @property string $ContainerPath
 * @property 'READ_ONLY'|'READ_AND_WRITE' $AccessLevel
 */
class ContainerMountPoint extends Shape
{
    /**
     * @param array{
     *     InstancePath: string,
     *     ContainerPath?: string,
     *     AccessLevel?: 'READ_ONLY'|'READ_AND_WRITE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
