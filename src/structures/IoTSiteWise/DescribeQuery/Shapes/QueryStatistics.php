<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $rowCount
 * @property int $bytesScanned
 * @property int $executionTimeInMillis
 */
class QueryStatistics extends Shape
{
    /**
     * @param array{
     *     rowCount: int,
     *     bytesScanned: int,
     *     executionTimeInMillis: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
