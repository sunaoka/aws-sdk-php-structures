<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 */
class IpamOperatingRegion extends Shape
{
    /**
     * @param array{RegionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
