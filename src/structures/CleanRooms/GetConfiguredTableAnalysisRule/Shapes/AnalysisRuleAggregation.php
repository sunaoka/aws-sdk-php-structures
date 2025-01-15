<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AggregateColumn> $aggregateColumns
 * @property list<string> $joinColumns
 * @property 'QUERY_RUNNER'|null $joinRequired
 * @property list<'OR'|'AND'>|null $allowedJoinOperators
 * @property list<string> $dimensionColumns
 * @property list<'ABS'|'CAST'|'CEILING'|'COALESCE'|'CONVERT'|'CURRENT_DATE'|'DATEADD'|'EXTRACT'|'FLOOR'|'GETDATE'|'LN'|'LOG'|'LOWER'|'ROUND'|'RTRIM'|'SQRT'|'SUBSTRING'|'TO_CHAR'|'TO_DATE'|'TO_NUMBER'|'TO_TIMESTAMP'|'TRIM'|'TRUNC'|'UPPER'> $scalarFunctions
 * @property list<AggregationConstraint> $outputConstraints
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null $additionalAnalyses
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
     *     scalarFunctions: list<'ABS'|'CAST'|'CEILING'|'COALESCE'|'CONVERT'|'CURRENT_DATE'|'DATEADD'|'EXTRACT'|'FLOOR'|'GETDATE'|'LN'|'LOG'|'LOWER'|'ROUND'|'RTRIM'|'SQRT'|'SUBSTRING'|'TO_CHAR'|'TO_DATE'|'TO_NUMBER'|'TO_TIMESTAMP'|'TRIM'|'TRUNC'|'UPPER'>,
     *     outputConstraints: list<AggregationConstraint>,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
