<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property int|null $Size
 */
class DiskImageVolumeDescription extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
