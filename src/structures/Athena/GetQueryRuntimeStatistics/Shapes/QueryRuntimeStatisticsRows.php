<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InputRows
 * @property int|null $InputBytes
 * @property int|null $OutputBytes
 * @property int|null $OutputRows
 */
class QueryRuntimeStatisticsRows extends Shape
{
    /**
     * @param array{
     *     InputRows?: int|null,
     *     InputBytes?: int|null,
     *     OutputBytes?: int|null,
     *     OutputRows?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
