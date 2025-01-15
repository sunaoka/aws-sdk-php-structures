<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleAction> $Actions
 * @property list<RuleCondition>|null $Conditions
 * @property string|null $Name
 * @property list<RuleCondition>|null $Unless
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Actions: list<RuleAction>,
     *     Conditions?: list<RuleCondition>|null,
     *     Name?: string|null,
     *     Unless?: list<RuleCondition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
