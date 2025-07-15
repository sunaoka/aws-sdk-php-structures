<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'io-enabled'|'io-performance'|'initialization-state'|null $Name
 * @property string|null $Status
 */
class VolumeStatusDetails extends Shape
{
    /**
     * @param array{
     *     Name?: 'io-enabled'|'io-performance'|'initialization-state'|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
