<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourcePath
 */
class HostVolumeProperties extends Shape
{
    /**
     * @param array{sourcePath?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
