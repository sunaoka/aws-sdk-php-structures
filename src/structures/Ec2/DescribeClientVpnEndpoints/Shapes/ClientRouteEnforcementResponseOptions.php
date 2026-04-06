<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enforced
 */
class ClientRouteEnforcementResponseOptions extends Shape
{
    /**
     * @param array{Enforced?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
