<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $ServiceName
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int<0, max> $AnomalyCount
 * @property int<0, max> $TotalCount
 * @property int<0, max> $SampledAnomalyCount
 */
class SamplingBoostStatisticsDocument extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     ServiceName: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     AnomalyCount: int<0, max>,
     *     TotalCount: int<0, max>,
     *     SampledAnomalyCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
