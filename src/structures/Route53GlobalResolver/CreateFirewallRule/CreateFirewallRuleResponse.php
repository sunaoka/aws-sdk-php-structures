<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateFirewallRule;

use Sunaoka\Aws\Structures\Response;

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
class CreateFirewallRuleResponse extends Response
{
}
