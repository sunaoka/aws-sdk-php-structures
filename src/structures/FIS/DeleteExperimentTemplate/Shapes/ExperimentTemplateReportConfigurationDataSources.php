<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExperimentTemplateReportConfigurationCloudWatchDashboard> $cloudWatchDashboards
 */
class ExperimentTemplateReportConfigurationDataSources extends Shape
{
    /**
     * @param array{cloudWatchDashboards?: list<ExperimentTemplateReportConfigurationCloudWatchDashboard>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
