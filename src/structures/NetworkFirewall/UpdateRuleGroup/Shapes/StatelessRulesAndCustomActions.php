<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StatelessRule> $StatelessRules
 * @property list<CustomAction>|null $CustomActions
 */
class StatelessRulesAndCustomActions extends Shape
{
    /**
     * @param array{
     *     StatelessRules: list<StatelessRule>,
     *     CustomActions?: list<CustomAction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
