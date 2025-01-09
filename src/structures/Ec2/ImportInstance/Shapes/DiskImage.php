<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property DiskImageDetail $Image
 * @property VolumeDetail $Volume
 */
class DiskImage extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Image?: DiskImageDetail,
     *     Volume?: VolumeDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
