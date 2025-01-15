<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkId
 * @property 'vpc'|null $NetworkType
 */
class AssociatedTargetNetwork extends Shape
{
    /**
     * @param array{
     *     NetworkId?: string|null,
     *     NetworkType?: 'vpc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
