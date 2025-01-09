<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatisticsConfiguration $DatasetStatisticsConfiguration
 * @property list<ColumnSelector> $ProfileColumns
 * @property list<ColumnStatisticsConfiguration> $ColumnStatisticsConfigurations
 * @property EntityDetectorConfiguration $EntityDetectorConfiguration
 */
class ProfileConfiguration extends Shape
{
    /**
     * @param array{
     *     DatasetStatisticsConfiguration?: StatisticsConfiguration,
     *     ProfileColumns?: list<ColumnSelector>,
     *     ColumnStatisticsConfigurations?: list<ColumnStatisticsConfiguration>,
     *     EntityDetectorConfiguration?: EntityDetectorConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
