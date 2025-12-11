<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'ALERT'|'BLOCK'|null $action
 * @property 'CNAME'|null $blockOverrideDnsType
 * @property string|null $blockOverrideDomain
 * @property int<0, 604800>|null $blockOverrideTtl
 * @property 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null $blockResponse
 * @property string|null $clientToken
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceThreshold
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string|null $firewallDomainListId
 * @property string $id
 * @property string|null $name
 * @property int<1, 10000>|null $priority
 * @property string|null $dnsViewId
 * @property string|null $queryType
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class BatchUpdateFirewallRuleResult extends Shape
{
    /**
     * @param array{
     *     action?: 'ALLOW'|'ALERT'|'BLOCK'|null,
     *     blockOverrideDnsType?: 'CNAME'|null,
     *     blockOverrideDomain?: string|null,
     *     blockOverrideTtl?: int<0, 604800>|null,
     *     blockResponse?: 'NODATA'|'NXDOMAIN'|'OVERRIDE'|null,
     *     clientToken?: string|null,
     *     confidenceThreshold?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     dnsAdvancedProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     firewallDomainListId?: string|null,
     *     id: string,
     *     name?: string|null,
     *     priority?: int<1, 10000>|null,
     *     dnsViewId?: string|null,
     *     queryType?: string|null,
     *     status?: 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
