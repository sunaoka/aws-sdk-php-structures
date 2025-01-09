<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRule> $StatelessRules
 * @property list<CustomAction> $CustomActions
 */
class StatelessRulesAndCustomActions extends Shape
{
    /**
     * @param array{
     *     StatelessRules: list<StatelessRule>,
     *     CustomActions?: list<CustomAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
