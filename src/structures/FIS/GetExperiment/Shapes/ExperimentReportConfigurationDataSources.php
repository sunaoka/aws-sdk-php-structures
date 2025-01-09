<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExperimentReportConfigurationCloudWatchDashboard> $cloudWatchDashboards
 */
class ExperimentReportConfigurationDataSources extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ExperimentReportConfigurationCloudWatchDashboard>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
