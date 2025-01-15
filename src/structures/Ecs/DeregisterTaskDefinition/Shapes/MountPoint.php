<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceVolume
 * @property string|null $containerPath
 * @property bool|null $readOnly
 */
class MountPoint extends Shape
{
    /**
     * @param array{
     *     sourceVolume?: string|null,
     *     containerPath?: string|null,
     *     readOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
