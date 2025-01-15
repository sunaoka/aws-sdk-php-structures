<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property DiskImageDetail|null $Image
 * @property VolumeDetail|null $Volume
 */
class DiskImage extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Image?: DiskImageDetail|null,
     *     Volume?: VolumeDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
