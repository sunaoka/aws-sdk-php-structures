<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SizeInGB
 * @property int $Count
 * @property 'hdd'|'ssd' $Type
 */
class DiskInfo extends Shape
{
    /**
     * @param array{
     *     SizeInGB?: int,
     *     Count?: int,
     *     Type?: 'hdd'|'ssd'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
