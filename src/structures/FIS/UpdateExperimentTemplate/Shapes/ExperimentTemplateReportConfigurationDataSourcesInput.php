<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReportConfigurationCloudWatchDashboardInput> $cloudWatchDashboards
 */
class ExperimentTemplateReportConfigurationDataSourcesInput extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ReportConfigurationCloudWatchDashboardInput>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
