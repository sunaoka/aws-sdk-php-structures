<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleGroupAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property string $VpcId
 * @property int $Priority
 * @property 'COMPLETE'|'DELETING'|'UPDATING' $Status
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListFirewallRuleGroupAssociationsRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId?: string,
     *     VpcId?: string,
     *     Priority?: int,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
