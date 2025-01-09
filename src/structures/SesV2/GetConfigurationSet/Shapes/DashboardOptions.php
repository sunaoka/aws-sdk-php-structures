<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $EngagementMetrics
 */
class DashboardOptions extends Shape
{
    /**
     * @param array{EngagementMetrics?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
