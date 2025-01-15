<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Host|null $host
 * @property string|null $name
 * @property EFSVolumeConfiguration|null $efsVolumeConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     host?: Host|null,
     *     name?: string|null,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
