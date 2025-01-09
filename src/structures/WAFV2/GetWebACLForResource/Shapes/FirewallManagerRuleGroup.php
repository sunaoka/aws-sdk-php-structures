<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Priority
 * @property FirewallManagerStatement $FirewallManagerStatement
 * @property OverrideAction $OverrideAction
 * @property VisibilityConfig $VisibilityConfig
 */
class FirewallManagerRuleGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Priority: int,
     *     FirewallManagerStatement: FirewallManagerStatement,
     *     OverrideAction: OverrideAction,
     *     VisibilityConfig: VisibilityConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
