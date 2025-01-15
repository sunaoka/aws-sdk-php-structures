<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleGroupAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallRuleGroupId
 * @property string|null $VpcId
 * @property int|null $Priority
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|null $Status
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallRuleGroupAssociationsRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId?: string|null,
     *     VpcId?: string|null,
     *     Priority?: int|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
