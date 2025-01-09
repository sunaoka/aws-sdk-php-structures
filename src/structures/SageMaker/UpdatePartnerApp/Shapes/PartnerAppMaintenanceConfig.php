<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaintenanceWindowStart
 */
class PartnerAppMaintenanceConfig extends Shape
{
    /**
     * @param array{MaintenanceWindowStart?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
