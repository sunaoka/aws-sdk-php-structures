<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $ClientID
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int $RequestCount
 * @property int $SampledCount
 * @property int $BorrowCount
 */
class SamplingStatisticsDocument extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     ClientID: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     RequestCount: int,
     *     SampledCount: int,
     *     BorrowCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
