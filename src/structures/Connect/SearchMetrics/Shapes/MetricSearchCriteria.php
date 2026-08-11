<?php

namespace Sunaoka\Aws\Structures\Connect\SearchMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricSearchCriteria>|null $OrConditions
 * @property list<MetricSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property BooleanCondition|null $BooleanCondition
 */
class MetricSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<MetricSearchCriteria>|null,
     *     AndConditions?: list<MetricSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     BooleanCondition?: BooleanCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
