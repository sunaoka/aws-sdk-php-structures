<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MESSAGE_SIZE' $Attribute
 */
class RuleNumberToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'MESSAGE_SIZE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
