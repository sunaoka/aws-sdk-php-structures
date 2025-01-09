<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'assume-role-failure'|'throttling-failure'|'unauthorized-failure' $Code
 * @property string $Message
 */
class IpamDiscoveryFailureReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'assume-role-failure'|'throttling-failure'|'unauthorized-failure',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
