<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $recordsMatched
 * @property double|null $recordsScanned
 * @property double|null $estimatedRecordsSkipped
 * @property double|null $bytesScanned
 * @property double|null $estimatedBytesSkipped
 * @property double|null $logGroupsScanned
 * @property double|null $resultCount
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     recordsMatched?: double|null,
     *     recordsScanned?: double|null,
     *     estimatedRecordsSkipped?: double|null,
     *     bytesScanned?: double|null,
     *     estimatedBytesSkipped?: double|null,
     *     logGroupsScanned?: double|null,
     *     resultCount?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
