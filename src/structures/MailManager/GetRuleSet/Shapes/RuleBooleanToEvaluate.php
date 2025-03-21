<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Analysis|null $Analysis
 * @property 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED'|null $Attribute
 * @property RuleIsInAddressList|null $IsInAddressList
 */
class RuleBooleanToEvaluate extends Shape
{
    /**
     * @param array{
     *     Analysis?: Analysis|null,
     *     Attribute?: 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED'|null,
     *     IsInAddressList?: RuleIsInAddressList|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
