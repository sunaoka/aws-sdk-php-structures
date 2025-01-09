<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'MANAGED'|'ACCOUNT' $Scope
 * @property 'AWS_MANAGED_THREAT_SIGNATURES'|'AWS_MANAGED_DOMAIN_LISTS' $ManagedType
 * @property 'STATELESS'|'STATEFUL' $Type
 */
class ListRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Scope?: 'MANAGED'|'ACCOUNT',
     *     ManagedType?: 'AWS_MANAGED_THREAT_SIGNATURES'|'AWS_MANAGED_DOMAIN_LISTS',
     *     Type?: 'STATELESS'|'STATEFUL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
