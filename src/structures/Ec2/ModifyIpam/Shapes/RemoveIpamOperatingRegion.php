<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 */
class RemoveIpamOperatingRegion extends Shape
{
    /**
     * @param array{RegionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
