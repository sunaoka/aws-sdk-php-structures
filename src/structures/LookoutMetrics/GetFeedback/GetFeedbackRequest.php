<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property Shapes\AnomalyGroupTimeSeries $AnomalyGroupTimeSeriesFeedback
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class GetFeedbackRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupTimeSeriesFeedback: Shapes\AnomalyGroupTimeSeries,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
