<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $recordsMatched
 * @property double|null $recordsScanned
 * @property double|null $bytesScanned
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     recordsMatched?: double|null,
     *     recordsScanned?: double|null,
     *     bytesScanned?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
