<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $SourceArn
 * @property \Aws\Api\DateTimeResult $TimeStamp
 * @property double $Max
 * @property double $Min
 * @property double $Last
 * @property int $Count
 * @property double $Avg
 * @property double $StdDev
 */
class TrialComponentMetricSummary extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     SourceArn?: string,
     *     TimeStamp?: \Aws\Api\DateTimeResult,
     *     Max?: double,
     *     Min?: double,
     *     Last?: double,
     *     Count?: int,
     *     Avg?: double,
     *     StdDev?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
