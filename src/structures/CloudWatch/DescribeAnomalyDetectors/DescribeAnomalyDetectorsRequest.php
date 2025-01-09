<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Shapes\Dimension> $Dimensions
 * @property list<'SINGLE_METRIC'|'METRIC_MATH'> $AnomalyDetectorTypes
 */
class DescribeAnomalyDetectorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     AnomalyDetectorTypes?: list<'SINGLE_METRIC'|'METRIC_MATH'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
