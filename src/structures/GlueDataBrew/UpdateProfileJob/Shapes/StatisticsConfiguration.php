<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $IncludedStatistics
 * @property list<StatisticOverride>|null $Overrides
 */
class StatisticsConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludedStatistics?: list<string>|null,
     *     Overrides?: list<StatisticOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
