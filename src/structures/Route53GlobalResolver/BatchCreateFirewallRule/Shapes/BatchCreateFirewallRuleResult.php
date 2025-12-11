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
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property 'DGA'|'DNS_TUNNELING'|null $dnsAdvancedProtection
 * @property string|null $firewallDomainListId
 * @property string|null $id
 * @property string|null $managedDomainListName
 * @property string $name
 * @property int<1, 10000>|null $priority
 * @property string $dnsViewId
 * @property string|null $queryType
 * @property 'CREATING'|'OPERATIONAL'|'UPDATING'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class BatchCreateFirewallRuleResult extends Shape
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
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     dnsAdvancedProtection?: 'DGA'|'DNS_TUNNELING'|null,
     *     firewallDomainListId?: string|null,
     *     id?: string|null,
     *     managedDomainListName?: string|null,
     *     name: string,
     *     priority?: int<1, 10000>|null,
     *     dnsViewId: string,
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
