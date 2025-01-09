<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleAction> $Actions
 * @property list<RuleCondition> $Conditions
 * @property string $Name
 * @property list<RuleCondition> $Unless
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Actions: list<RuleAction>,
     *     Conditions?: list<RuleCondition>,
     *     Name?: string,
     *     Unless?: list<RuleCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
