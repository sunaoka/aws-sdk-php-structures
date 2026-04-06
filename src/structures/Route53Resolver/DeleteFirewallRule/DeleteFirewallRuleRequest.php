<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallRuleGroupId
 * @property string|null $FirewallDomainListId
 * @property string|null $FirewallThreatProtectionId
 * @property string|null $Qtype
 */
class DeleteFirewallRuleRequest extends Request
{
    /**
     * @param array{
     *     FirewallRuleGroupId: string,
     *     FirewallDomainListId?: string|null,
     *     FirewallThreatProtectionId?: string|null,
     *     Qtype?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
