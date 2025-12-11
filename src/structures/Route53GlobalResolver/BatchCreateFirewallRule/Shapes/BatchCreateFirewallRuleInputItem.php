<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchCreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALERT'|'BLOCK' $action
 * @property 'CNAME'|null $blockOverrideDnsType
 * @property string|null $blockOverrideDomain
 * @property int<0, 604800>|null $blockOverrideTtl
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $blockResponse
 * @property string $clientToken
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceThreshold
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string|null $firewallDomainListId
 * @property string $name
 * @property int<1, 10000>|null $priority
 * @property string $dnsViewId
 * @property string|null $qType
 */
class BatchCreateFirewallRuleInputItem extends Shape
{
    /**
     * @param array{
     *     action: 'ALLOW'|'ALERT'|'BLOCK',
     *     blockOverrideDnsType?: 'CNAME'|null,
     *     blockOverrideDomain?: string|null,
     *     blockOverrideTtl?: int<0, 604800>|null,
     *     blockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     clientToken: string,
     *     confidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     description?: string|null,
     *     dnsAdvancedProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     firewallDomainListId?: string|null,
     *     name: string,
     *     priority?: int<1, 10000>|null,
     *     dnsViewId: string,
     *     qType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
