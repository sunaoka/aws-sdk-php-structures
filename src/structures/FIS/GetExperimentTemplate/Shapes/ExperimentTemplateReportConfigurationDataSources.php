<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExperimentTemplateReportConfigurationCloudWatchDashboard>|null $cloudWatchDashboards
 */
class ExperimentTemplateReportConfigurationDataSources extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ExperimentTemplateReportConfigurationCloudWatchDashboard>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
