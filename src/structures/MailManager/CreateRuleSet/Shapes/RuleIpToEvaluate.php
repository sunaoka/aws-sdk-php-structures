<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_IP' $Attribute
 */
class RuleIpToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'SOURCE_IP'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
