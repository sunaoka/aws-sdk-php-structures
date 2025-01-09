<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FaultCount
 * @property int $OkCount
 * @property int $TotalCount
 */
class RequestImpactStatistics extends Shape
{
    /**
     * @param array{
     *     FaultCount?: int,
     *     OkCount?: int,
     *     TotalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
