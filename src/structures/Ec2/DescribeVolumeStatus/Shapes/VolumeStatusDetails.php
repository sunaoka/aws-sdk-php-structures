<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'io-enabled'|'io-performance'|null $Name
 * @property string|null $Status
 */
class VolumeStatusDetails extends Shape
{
    /**
     * @param array{
     *     Name?: 'io-enabled'|'io-performance'|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
