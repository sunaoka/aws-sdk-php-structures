<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Analysis|null $Analysis
 * @property 'SPF'|'DKIM'|null $Attribute
 */
class RuleVerdictToEvaluate extends Shape
{
    /**
     * @param array{
     *     Analysis?: Analysis|null,
     *     Attribute?: 'SPF'|'DKIM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
