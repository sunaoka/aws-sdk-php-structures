<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetVdmOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $EngagementMetrics
 */
class DashboardOptions extends Shape
{
    /**
     * @param array{EngagementMetrics?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
