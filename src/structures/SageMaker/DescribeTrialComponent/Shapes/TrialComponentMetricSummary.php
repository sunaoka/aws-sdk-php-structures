<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $SourceArn
 * @property \Aws\Api\DateTimeResult|null $TimeStamp
 * @property double|null $Max
 * @property double|null $Min
 * @property double|null $Last
 * @property int|null $Count
 * @property double|null $Avg
 * @property double|null $StdDev
 */
class TrialComponentMetricSummary extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     SourceArn?: string|null,
     *     TimeStamp?: \Aws\Api\DateTimeResult|null,
     *     Max?: double|null,
     *     Min?: double|null,
     *     Last?: double|null,
     *     Count?: int|null,
     *     Avg?: double|null,
     *     StdDev?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
