<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Host $host
 * @property string $name
 * @property EFSVolumeConfiguration $efsVolumeConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     host?: Host,
     *     name?: string,
     *     efsVolumeConfiguration?: EFSVolumeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
