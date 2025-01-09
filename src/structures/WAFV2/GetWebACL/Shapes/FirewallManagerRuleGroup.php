<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int<0, max> $Priority
 * @property FirewallManagerStatement $FirewallManagerStatement
 * @property OverrideAction $OverrideAction
 * @property VisibilityConfig $VisibilityConfig
 */
class FirewallManagerRuleGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Priority: int<0, max>,
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
