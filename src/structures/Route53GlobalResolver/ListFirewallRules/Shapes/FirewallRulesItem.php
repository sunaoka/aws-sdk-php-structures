<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALERT'|'BLOCK' $action
 * @property 'CNAME'|null $blockOverrideDnsType
 * @property string|null $blockOverrideDomain
 * @property int<0, 604800>|null $blockOverrideTtl
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $blockResponse
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceThreshold
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string|null $firewallDomainListId
 * @property string $id
 * @property string $name
 * @property int<1, 10000> $priority
 * @property string $dnsViewId
 * @property string|null $queryType
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FirewallRulesItem extends Shape
{
    /**
     * @param array{
     *     action: 'ALLOW'|'ALERT'|'BLOCK',
     *     blockOverrideDnsType?: 'CNAME'|null,
     *     blockOverrideDomain?: string|null,
     *     blockOverrideTtl?: int<0, 604800>|null,
     *     blockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     confidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     dnsAdvancedProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     firewallDomainListId?: string|null,
     *     id: string,
     *     name: string,
     *     priority: int<1, 10000>,
     *     dnsViewId: string,
     *     queryType?: string|null,
     *     status: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
