<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $IncludedStatistics
 * @property list<StatisticOverride> $Overrides
 */
class StatisticsConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludedStatistics?: list<string>,
     *     Overrides?: list<StatisticOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
