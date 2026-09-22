<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetTelemetryQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $bytesScanned
 * @property int|null $percentComplete
 * @property int|null $recordsScanned
 * @property int|null $recordsMatched
 * @property PartialResults|null $partialResults
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     bytesScanned?: double|null,
     *     percentComplete?: int|null,
     *     recordsScanned?: int|null,
     *     recordsMatched?: int|null,
     *     partialResults?: PartialResults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
