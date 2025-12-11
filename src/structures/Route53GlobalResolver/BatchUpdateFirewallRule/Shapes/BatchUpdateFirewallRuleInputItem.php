<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALERT'|'BLOCK'|null $action
 * @property 'CNAME'|null $blockOverrideDnsType
 * @property string|null $blockOverrideDomain
 * @property int<0, 604800>|null $blockOverrideTtl
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $blockResponse
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceThreshold
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string $firewallRuleId
 * @property string|null $name
 * @property int<1, 10000>|null $priority
 */
class BatchUpdateFirewallRuleInputItem extends Shape
{
    /**
     * @param array{
     *     action?: 'ALLOW'|'ALERT'|'BLOCK'|null,
     *     blockOverrideDnsType?: 'CNAME'|null,
     *     blockOverrideDomain?: string|null,
     *     blockOverrideTtl?: int<0, 604800>|null,
     *     blockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     confidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     description?: string|null,
     *     dnsAdvancedProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     firewallRuleId: string,
     *     name?: string|null,
     *     priority?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
