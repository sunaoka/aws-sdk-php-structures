<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $OkCount
 * @property ErrorStatistics|null $ErrorStatistics
 * @property FaultStatistics|null $FaultStatistics
 * @property int|null $TotalCount
 * @property double|null $TotalResponseTime
 */
class ServiceStatistics extends Shape
{
    /**
     * @param array{
     *     OkCount?: int|null,
     *     ErrorStatistics?: ErrorStatistics|null,
     *     FaultStatistics?: FaultStatistics|null,
     *     TotalCount?: int|null,
     *     TotalResponseTime?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
