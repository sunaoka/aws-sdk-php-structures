<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property int $minimum
 * @property 'COUNT_DISTINCT' $type
 */
class AggregationConstraint extends Shape
{
    /**
     * @param array{
     *     columnName: string,
     *     minimum: int,
     *     type: 'COUNT_DISTINCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
