<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $Timestamp
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeAnomalyDetectionExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     Timestamp?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
