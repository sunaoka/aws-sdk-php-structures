<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnSelector>|null $Selectors
 * @property StatisticsConfiguration $Statistics
 */
class ColumnStatisticsConfiguration extends Shape
{
    /**
     * @param array{
     *     Selectors?: list<ColumnSelector>|null,
     *     Statistics: StatisticsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
