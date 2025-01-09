<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 */
class AddIpamOperatingRegion extends Shape
{
    /**
     * @param array{RegionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
