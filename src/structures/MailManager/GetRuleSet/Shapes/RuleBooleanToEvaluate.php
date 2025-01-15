<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED'|null $Attribute
 */
class RuleBooleanToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'READ_RECEIPT_REQUESTED'|'TLS'|'TLS_WRAPPED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
