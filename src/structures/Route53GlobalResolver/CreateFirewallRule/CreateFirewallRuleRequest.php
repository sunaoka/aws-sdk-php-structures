<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALLOW'|'ALERT'|'BLOCK' $action
 * @property 'CNAME'|null $blockOverrideDnsType
 * @property string|null $blockOverrideDomain
 * @property int<0, 604800>|null $blockOverrideTtl
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $blockResponse
 * @property string|null $clientToken
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceThreshold
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string|null $firewallDomainListId
 * @property string $name
 * @property int<1, 10000>|null $priority
 * @property string $dnsViewId
 * @property string|null $qType
 */
class CreateFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     action: 'ALLOW'|'ALERT'|'BLOCK',
     *     blockOverrideDnsType?: 'CNAME'|null,
     *     blockOverrideDomain?: string|null,
     *     blockOverrideTtl?: int<0, 604800>|null,
     *     blockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     clientToken?: string|null,
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
