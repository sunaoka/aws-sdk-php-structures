<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER'|null $RuleOrder
 */
class StatefulRuleOptions extends Shape
{
    /**
     * @param array{RuleOrder?: 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
