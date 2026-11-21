<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallArn
 * @property 'pending'|'active'|'disabling'|null $FirewallOnboardingStatus
 * @property 'monitor'|'enforce'|null $FirewallMode
 */
class NetworkFirewallAssociation extends Shape
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     FirewallOnboardingStatus?: 'pending'|'active'|'disabling'|null,
     *     FirewallMode?: 'monitor'|'enforce'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
