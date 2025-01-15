<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $ClientID
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int<0, max> $RequestCount
 * @property int<0, max> $SampledCount
 * @property int<0, max>|null $BorrowCount
 */
class SamplingStatisticsDocument extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     ClientID: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     RequestCount: int<0, max>,
     *     SampledCount: int<0, max>,
     *     BorrowCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
