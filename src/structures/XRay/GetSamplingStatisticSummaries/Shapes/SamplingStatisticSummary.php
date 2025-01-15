<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingStatisticSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property int|null $RequestCount
 * @property int|null $BorrowCount
 * @property int|null $SampledCount
 */
class SamplingStatisticSummary extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     RequestCount?: int|null,
     *     BorrowCount?: int|null,
     *     SampledCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
