<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OkCount
 * @property ErrorStatistics $ErrorStatistics
 * @property FaultStatistics $FaultStatistics
 * @property int $TotalCount
 * @property double $TotalResponseTime
 */
class EdgeStatistics extends Shape
{
    /**
     * @param array{
     *     OkCount?: int,
     *     ErrorStatistics?: ErrorStatistics,
     *     FaultStatistics?: FaultStatistics,
     *     TotalCount?: int,
     *     TotalResponseTime?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
