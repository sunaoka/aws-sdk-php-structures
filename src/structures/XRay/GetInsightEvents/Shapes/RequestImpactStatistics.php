<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FaultCount
 * @property int|null $OkCount
 * @property int|null $TotalCount
 */
class RequestImpactStatistics extends Shape
{
    /**
     * @param array{
     *     FaultCount?: int|null,
     *     OkCount?: int|null,
     *     TotalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
