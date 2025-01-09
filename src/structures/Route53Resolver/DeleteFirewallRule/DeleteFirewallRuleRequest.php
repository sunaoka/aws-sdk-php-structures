<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property string $FirewallDomainListId
 * @property string $FirewallThreatProtectionId
 * @property string $Qtype
 */
class DeleteFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string,
     *     FirewallThreatProtectionId?: string,
     *     Qtype?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
