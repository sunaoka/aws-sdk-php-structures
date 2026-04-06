<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReportConfigurationCloudWatchDashboardInput>|null $cloudWatchDashboards
 */
class ExperimentTemplateReportConfigurationDataSourcesInput extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ReportConfigurationCloudWatchDashboardInput>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
