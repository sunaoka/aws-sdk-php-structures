<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteFirewallManagerRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLArn
 * @property string $WebACLLockToken
 */
class DeleteFirewallManagerRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     WebACLArn: string,
     *     WebACLLockToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
