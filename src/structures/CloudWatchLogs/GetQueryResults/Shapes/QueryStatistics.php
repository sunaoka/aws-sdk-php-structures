<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $recordsMatched
 * @property double $recordsScanned
 * @property double $estimatedRecordsSkipped
 * @property double $bytesScanned
 * @property double $estimatedBytesSkipped
 * @property double $logGroupsScanned
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     recordsMatched?: double,
     *     recordsScanned?: double,
     *     estimatedRecordsSkipped?: double,
     *     bytesScanned?: double,
     *     estimatedBytesSkipped?: double,
     *     logGroupsScanned?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
