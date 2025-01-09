<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAlertsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
