<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleDefinition $RuleDefinition
 * @property int $Priority
 */
class StatelessRule extends Shape
{
    /**
     * @param array{
     *     RuleDefinition: RuleDefinition,
     *     Priority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
