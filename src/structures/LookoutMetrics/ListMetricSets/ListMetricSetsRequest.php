<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListMetricSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AnomalyDetectorArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMetricSetsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
