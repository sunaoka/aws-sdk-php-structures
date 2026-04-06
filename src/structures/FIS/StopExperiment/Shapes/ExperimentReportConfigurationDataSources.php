<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExperimentReportConfigurationCloudWatchDashboard>|null $cloudWatchDashboards
 */
class ExperimentReportConfigurationDataSources extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ExperimentReportConfigurationCloudWatchDashboard>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
