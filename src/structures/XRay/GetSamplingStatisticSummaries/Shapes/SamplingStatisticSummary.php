<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingStatisticSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int $RequestCount
 * @property int $BorrowCount
 * @property int $SampledCount
 */
class SamplingStatisticSummary extends Shape
{
    /**
     * @param array{
     *     RuleName?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     RequestCount?: int,
     *     BorrowCount?: int,
     *     SampledCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
