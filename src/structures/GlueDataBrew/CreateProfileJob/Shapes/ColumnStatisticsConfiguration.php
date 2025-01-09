<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnSelector> $Selectors
 * @property StatisticsConfiguration $Statistics
 */
class ColumnStatisticsConfiguration extends Shape
{
    /**
     * @param array{
     *     Selectors?: list<ColumnSelector>,
     *     Statistics: StatisticsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
