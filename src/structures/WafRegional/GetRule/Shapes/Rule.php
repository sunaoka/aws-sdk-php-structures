<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string $Name
 * @property string $MetricName
 * @property list<Predicate> $Predicates
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Name?: string,
     *     MetricName?: string,
     *     Predicates: list<Predicate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
