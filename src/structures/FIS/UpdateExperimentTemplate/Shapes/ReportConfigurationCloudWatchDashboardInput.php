<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dashboardIdentifier
 */
class ReportConfigurationCloudWatchDashboardInput extends Shape
{
    /**
     * @param array{dashboardIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
