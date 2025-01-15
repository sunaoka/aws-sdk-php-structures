<?php

namespace Sunaoka\Aws\Structures\Waf\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string|null $Name
 * @property string|null $MetricName
 * @property list<Predicate> $Predicates
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Name?: string|null,
     *     MetricName?: string|null,
     *     Predicates: list<Predicate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
