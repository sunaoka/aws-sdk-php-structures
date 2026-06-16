<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchCreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PartnerThreatProtectionConfig|null $PartnerThreatProtection
 * @property FirewallAdvancedContentCategoryConfig|null $FirewallAdvancedContentCategory
 * @property FirewallAdvancedThreatCategoryConfig|null $FirewallAdvancedThreatCategory
 * @property DnsThreatProtectionRuleTypeConfig|null $DnsThreatProtection
 */
class FirewallRuleType extends Shape
{
    /**
     * @param array{
     *     PartnerThreatProtection?: PartnerThreatProtectionConfig|null,
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
