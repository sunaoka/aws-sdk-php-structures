<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InputRows
 * @property int $InputBytes
 * @property int $OutputBytes
 * @property int $OutputRows
 */
class QueryRuntimeStatisticsRows extends Shape
{
    /**
     * @param array{
     *     InputRows?: int,
     *     InputBytes?: int,
     *     OutputBytes?: int,
     *     OutputRows?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
