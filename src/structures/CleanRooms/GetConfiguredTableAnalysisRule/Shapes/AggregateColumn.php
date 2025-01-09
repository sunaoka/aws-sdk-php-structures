<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $columnNames
 * @property 'SUM'|'SUM_DISTINCT'|'COUNT'|'COUNT_DISTINCT'|'AVG' $function
 */
class AggregateColumn extends Shape
{
    /**
     * @param array{
     *     columnNames: list<string>,
     *     function: 'SUM'|'SUM_DISTINCT'|'COUNT'|'COUNT_DISTINCT'|'AVG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
