<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\PutFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property Shapes\AnomalyGroupTimeSeriesFeedback $AnomalyGroupTimeSeriesFeedback
 */
class PutFeedbackRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupTimeSeriesFeedback: Shapes\AnomalyGroupTimeSeriesFeedback
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
