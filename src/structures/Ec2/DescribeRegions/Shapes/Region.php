<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 * @property string|null $RegionName
 * @property string|null $OptInStatus
 */
class Region extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string|null,
     *     RegionName?: string|null,
     *     OptInStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
