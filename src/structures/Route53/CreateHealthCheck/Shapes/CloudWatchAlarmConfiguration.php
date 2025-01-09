<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $EvaluationPeriods
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property int<60, max> $Period
 * @property string $MetricName
 * @property string $Namespace
 * @property 'Average'|'Sum'|'SampleCount'|'Maximum'|'Minimum' $Statistic
 * @property list<Dimension> $Dimensions
 */
class CloudWatchAlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     EvaluationPeriods: int<1, max>,
     *     Threshold: double,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     Period: int<60, max>,
     *     MetricName: string,
     *     Namespace: string,
     *     Statistic: 'Average'|'Sum'|'SampleCount'|'Maximum'|'Minimum',
     *     Dimensions?: list<Dimension>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
