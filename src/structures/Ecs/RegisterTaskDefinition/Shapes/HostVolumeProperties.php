<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourcePath
 */
class HostVolumeProperties extends Shape
{
    /**
     * @param array{sourcePath?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
