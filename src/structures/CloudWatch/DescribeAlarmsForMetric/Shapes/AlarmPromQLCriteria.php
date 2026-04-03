<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Query
 * @property int<0, 86400>|null $PendingPeriod
 * @property int<0, 86400>|null $RecoveryPeriod
 */
class AlarmPromQLCriteria extends Shape
{
    /**
     * @param array{
     *     Query: string,
     *     PendingPeriod?: int<0, 86400>|null,
     *     RecoveryPeriod?: int<0, 86400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
