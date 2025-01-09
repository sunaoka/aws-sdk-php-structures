<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED' $Attribute
 */
class RuleBooleanToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
