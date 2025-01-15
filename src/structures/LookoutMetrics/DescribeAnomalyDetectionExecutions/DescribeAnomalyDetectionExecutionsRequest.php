<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string|null $Timestamp
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAnomalyDetectionExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     Timestamp?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
