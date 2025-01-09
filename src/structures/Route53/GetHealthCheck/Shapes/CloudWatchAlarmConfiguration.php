<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EvaluationPeriods
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property int $Period
 * @property string $MetricName
 * @property string $Namespace
 * @property 'Average'|'Sum'|'SampleCount'|'Maximum'|'Minimum' $Statistic
 * @property list<Dimension> $Dimensions
 */
class CloudWatchAlarmConfiguration extends Shape
{
    /**
     * @param array{
     *     EvaluationPeriods: int,
     *     Threshold: double,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     Period: int,
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
