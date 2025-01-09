<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceVolume
 * @property string $containerPath
 * @property bool $readOnly
 */
class MountPoint extends Shape
{
    /**
     * @param array{
     *     sourceVolume?: string,
     *     containerPath?: string,
     *     readOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
