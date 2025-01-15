<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyGroupId
 * @property string $MetricName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAnomalyGroupTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupId: string,
     *     MetricName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
