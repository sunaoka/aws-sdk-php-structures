<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListMetricSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListMetricSetsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
