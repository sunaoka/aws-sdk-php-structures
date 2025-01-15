<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatisticsConfiguration|null $DatasetStatisticsConfiguration
 * @property list<ColumnSelector>|null $ProfileColumns
 * @property list<ColumnStatisticsConfiguration>|null $ColumnStatisticsConfigurations
 * @property EntityDetectorConfiguration|null $EntityDetectorConfiguration
 */
class ProfileConfiguration extends Shape
{
    /**
     * @param array{
     *     DatasetStatisticsConfiguration?: StatisticsConfiguration|null,
     *     ProfileColumns?: list<ColumnSelector>|null,
     *     ColumnStatisticsConfigurations?: list<ColumnStatisticsConfiguration>|null,
     *     EntityDetectorConfiguration?: EntityDetectorConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
