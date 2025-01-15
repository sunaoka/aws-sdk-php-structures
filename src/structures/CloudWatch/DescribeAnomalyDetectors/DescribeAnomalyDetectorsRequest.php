<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property string|null $Namespace
 * @property string|null $MetricName
 * @property list<Shapes\Dimension>|null $Dimensions
 * @property list<'SINGLE_METRIC'|'METRIC_MATH'>|null $AnomalyDetectorTypes
 */
class DescribeAnomalyDetectorsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     Namespace?: string|null,
     *     MetricName?: string|null,
     *     Dimensions?: list<Shapes\Dimension>|null,
     *     AnomalyDetectorTypes?: list<'SINGLE_METRIC'|'METRIC_MATH'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
