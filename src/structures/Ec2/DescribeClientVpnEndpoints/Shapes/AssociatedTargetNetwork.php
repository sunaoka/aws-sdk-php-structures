<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkId
 * @property 'vpc' $NetworkType
 */
class AssociatedTargetNetwork extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string,
     *     NetworkType?: 'vpc'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
