<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchDeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallRuleGroupId
 * @property string|null $FirewallDomainListId
 * @property string|null $FirewallThreatProtectionId
 * @property string|null $Qtype
 */
class DeleteFirewallRuleEntry extends Shape
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
