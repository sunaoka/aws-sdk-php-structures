<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $Size
 */
class DiskImageVolumeDescription extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
