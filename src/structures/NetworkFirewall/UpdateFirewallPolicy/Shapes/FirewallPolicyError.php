<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DNS_FIREWALL_RULE_GROUP_UNAVAILABLE'|'ROUTE53_RESOLVED_IP_VALIDATION_MISSING' $Code
 * @property string $Message
 * @property string|null $ResourceId
 */
class FirewallPolicyError extends Shape
{
    /**
     * @param array{
     *     Code: 'DNS_FIREWALL_RULE_GROUP_UNAVAILABLE'|'ROUTE53_RESOLVED_IP_VALIDATION_MISSING',
     *     Message: string,
     *     ResourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
