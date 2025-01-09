<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SizeInMiB
 */
class MediaDeviceMemoryInfo extends Shape
{
    /**
     * @param array{SizeInMiB?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
