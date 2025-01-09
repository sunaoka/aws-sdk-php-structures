<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property Shapes\AnomalyGroupTimeSeries $AnomalyGroupTimeSeriesFeedback
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetFeedbackRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupTimeSeriesFeedback: Shapes\AnomalyGroupTimeSeries,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
