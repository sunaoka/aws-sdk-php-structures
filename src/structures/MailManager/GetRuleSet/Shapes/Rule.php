<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<RuleCondition>|null $Conditions
 * @property list<RuleCondition>|null $Unless
 * @property list<RuleAction> $Actions
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Conditions?: list<RuleCondition>|null,
     *     Unless?: list<RuleCondition>|null,
     *     Actions: list<RuleAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
