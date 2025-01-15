<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstancePath
 * @property string|null $ContainerPath
 * @property 'READ_ONLY'|'READ_AND_WRITE'|null $AccessLevel
 */
class ContainerMountPoint extends Shape
{
    /**
     * @param array{
     *     InstancePath: string,
     *     ContainerPath?: string|null,
     *     AccessLevel?: 'READ_ONLY'|'READ_AND_WRITE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
