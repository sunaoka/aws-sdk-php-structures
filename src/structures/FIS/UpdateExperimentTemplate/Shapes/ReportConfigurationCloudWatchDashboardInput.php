<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dashboardIdentifier
 */
class ReportConfigurationCloudWatchDashboardInput extends Shape
{
    /**
     * @param array{dashboardIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
