<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property MetricStat $MetricStat
 * @property string $Expression
 * @property string $Label
 * @property bool $ReturnData
 * @property int<1, max> $Period
 * @property string $AccountId
 */
class MetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MetricStat?: MetricStat,
     *     Expression?: string,
     *     Label?: string,
     *     ReturnData?: bool,
     *     Period?: int<1, max>,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
