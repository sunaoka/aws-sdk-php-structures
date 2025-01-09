<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dashboardIdentifier
 */
class ExperimentTemplateReportConfigurationCloudWatchDashboard extends Shape
{
    /**
     * @param array{dashboardIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
