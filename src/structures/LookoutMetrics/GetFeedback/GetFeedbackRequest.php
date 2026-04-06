<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property Shapes\AnomalyGroupTimeSeries $AnomalyGroupTimeSeriesFeedback
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetFeedbackRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupTimeSeriesFeedback: Shapes\AnomalyGroupTimeSeries,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
