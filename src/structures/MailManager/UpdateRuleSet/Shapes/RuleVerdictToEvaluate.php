<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Analysis $Analysis
 * @property 'SPF'|'DKIM' $Attribute
 */
class RuleVerdictToEvaluate extends Shape
{
    /**
     * @param array{
     *     Analysis?: Analysis,
     *     Attribute?: 'SPF'|'DKIM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
