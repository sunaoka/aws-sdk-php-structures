<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationDateRangeKpi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResultRowValue> $GroupedBys
 * @property list<ResultRowValue> $Values
 */
class ResultRow extends Shape
{
    /**
     * @param array{
     *     GroupedBys: list<ResultRowValue>,
     *     Values: list<ResultRowValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
