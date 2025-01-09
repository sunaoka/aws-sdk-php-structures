<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ResultsCount
 * @property int $TotalResultsCount
 * @property int $BytesScanned
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     ResultsCount?: int,
     *     TotalResultsCount?: int,
     *     BytesScanned?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
