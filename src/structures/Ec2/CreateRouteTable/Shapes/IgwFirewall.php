<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallArn
 * @property 'pending'|'active'|'disabling'|null $Status
 */
class IgwFirewall extends Shape
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     Status?: 'pending'|'active'|'disabling'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
