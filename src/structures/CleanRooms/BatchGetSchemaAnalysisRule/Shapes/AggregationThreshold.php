<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $identityColumns
 * @property int<2, 100000> $minimumIdentityCount
 * @property 'COUNT_DISTINCT' $type
 * @property list<OutputColumnThreshold>|null $outputColumnThresholds
 * @property 'COLUMNS_ONLY'|'ANY_EXPRESSION' $allowedAggregateExpressionType
 */
class AggregationThreshold extends Shape
{
    /**
     * @param array{
     *     identityColumns: list<string>,
     *     minimumIdentityCount: int<2, 100000>,
     *     type: 'COUNT_DISTINCT',
     *     outputColumnThresholds?: list<OutputColumnThreshold>|null,
     *     allowedAggregateExpressionType: 'COLUMNS_ONLY'|'ANY_EXPRESSION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
