<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleIpToEvaluate $Evaluate
 * @property 'CIDR_MATCHES'|'NOT_CIDR_MATCHES' $Operator
 * @property list<string> $Values
 */
class RuleIpExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: RuleIpToEvaluate,
     *     Operator: 'CIDR_MATCHES'|'NOT_CIDR_MATCHES',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
