<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property int<2, 100000> $minimum
 * @property 'COUNT_DISTINCT' $type
 */
class AggregationConstraint extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     minimum: int<2, 100000>,
     *     type: 'COUNT_DISTINCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
