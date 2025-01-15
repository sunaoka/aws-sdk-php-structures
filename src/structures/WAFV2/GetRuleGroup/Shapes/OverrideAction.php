<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CountAction|null $Count
 * @property NoneAction|null $None
 */
class OverrideAction extends Shape
{
    /**
     * @param array{
     *     Count?: CountAction|null,
     *     None?: NoneAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
