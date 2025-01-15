<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ResultsCount
 * @property int|null $TotalResultsCount
 * @property int|null $BytesScanned
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     ResultsCount?: int|null,
     *     TotalResultsCount?: int|null,
     *     BytesScanned?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
