<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptInStatus
 * @property string $RegionName
 * @property string $Endpoint
 */
class Region extends Shape
{
    /**
     * @param array{
     *     OptInStatus?: string,
     *     RegionName?: string,
     *     Endpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
