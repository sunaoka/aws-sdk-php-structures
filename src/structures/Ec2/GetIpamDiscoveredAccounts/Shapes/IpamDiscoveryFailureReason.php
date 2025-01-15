<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'assume-role-failure'|'throttling-failure'|'unauthorized-failure'|null $Code
 * @property string|null $Message
 */
class IpamDiscoveryFailureReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'assume-role-failure'|'throttling-failure'|'unauthorized-failure'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
