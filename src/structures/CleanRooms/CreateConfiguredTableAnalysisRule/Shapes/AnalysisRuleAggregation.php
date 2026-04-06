<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AggregateColumn> $aggregateColumns
 * @property list<string> $joinColumns
 * @property 'QUERY_RUNNER'|null $joinRequired
 * @property list<'OR'|'AND'>|null $allowedJoinOperators
 * @property list<string> $dimensionColumns
 * @property list<'TRUNC'|'ABS'|'CEILING'|'FLOOR'|'LN'|'LOG'|'ROUND'|'SQRT'|'CAST'|'LOWER'|'RTRIM'|'UPPER'|'COALESCE'> $scalarFunctions
 * @property list<AggregationConstraint> $outputConstraints
 */
class AnalysisRuleAggregation extends Shape
{
    /**
     * @param array{
     *     aggregateColumns: list<AggregateColumn>,
     *     joinColumns: list<string>,
     *     joinRequired?: 'QUERY_RUNNER'|null,
     *     allowedJoinOperators?: list<'OR'|'AND'>|null,
     *     dimensionColumns: list<string>,
     *     scalarFunctions: list<'TRUNC'|'ABS'|'CEILING'|'FLOOR'|'LN'|'LOG'|'ROUND'|'SQRT'|'CAST'|'LOWER'|'RTRIM'|'UPPER'|'COALESCE'>,
     *     outputConstraints: list<AggregationConstraint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
