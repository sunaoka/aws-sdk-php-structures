<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleType
 * @property string|null $Value
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property SubscriptionInfo|null $SubscriptionInfo
 */
class FirewallRuleTypeDefinition extends Shape
{
    /**
     * @param array{
     *     RuleType?: string|null,
     *     Value?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     SubscriptionInfo?: SubscriptionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
