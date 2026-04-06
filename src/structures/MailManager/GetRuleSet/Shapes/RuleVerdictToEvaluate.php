<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SPF'|'DKIM'|null $Attribute
 * @property Analysis|null $Analysis
 */
class RuleVerdictToEvaluate extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'SPF'|'DKIM'|null,
     *     Analysis?: Analysis|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
