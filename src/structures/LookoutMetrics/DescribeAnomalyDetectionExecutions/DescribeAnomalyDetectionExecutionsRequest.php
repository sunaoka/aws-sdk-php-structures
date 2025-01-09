<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $Timestamp
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeAnomalyDetectionExecutionsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     Timestamp?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
