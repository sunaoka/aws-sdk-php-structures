<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SizeInGB
 * @property int|null $Count
 * @property 'hdd'|'ssd'|null $Type
 */
class DiskInfo extends Shape
{
    /**
     * @param array{
     *     SizeInGB?: int|null,
     *     Count?: int|null,
     *     Type?: 'hdd'|'ssd'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
