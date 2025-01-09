<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyGroupId
 * @property string $MetricName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAnomalyGroupTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupId: string,
     *     MetricName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
