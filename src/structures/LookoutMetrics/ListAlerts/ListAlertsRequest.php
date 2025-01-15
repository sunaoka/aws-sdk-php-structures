<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AnomalyDetectorArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAlertsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
