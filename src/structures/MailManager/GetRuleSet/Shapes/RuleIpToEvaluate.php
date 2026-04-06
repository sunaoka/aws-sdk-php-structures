<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_IP'|null $Attribute
 */
class RuleIpToEvaluate extends Shape
{
    /**
     * @param array{Attribute?: 'SOURCE_IP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
