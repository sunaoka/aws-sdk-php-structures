<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaintenanceWindowStart
 */
class PartnerAppMaintenanceConfig extends Shape
{
    /**
     * @param array{MaintenanceWindowStart?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
