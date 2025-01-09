<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dashboardIdentifier
 */
class ExperimentReportConfigurationCloudWatchDashboard extends Shape
{
    /**
     * @param array{dashboardIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
