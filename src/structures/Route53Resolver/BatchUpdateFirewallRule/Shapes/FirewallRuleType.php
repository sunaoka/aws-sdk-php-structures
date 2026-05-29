<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FirewallAdvancedContentCategoryConfig|null $FirewallAdvancedContentCategory
 * @property FirewallAdvancedThreatCategoryConfig|null $FirewallAdvancedThreatCategory
 * @property DnsThreatProtectionRuleTypeConfig|null $DnsThreatProtection
 */
class FirewallRuleType extends Shape
{
    /**
     * @param array{
     *     FirewallAdvancedContentCategory?: FirewallAdvancedContentCategoryConfig|null,
     *     FirewallAdvancedThreatCategory?: FirewallAdvancedThreatCategoryConfig|null,
     *     DnsThreatProtection?: DnsThreatProtectionRuleTypeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
