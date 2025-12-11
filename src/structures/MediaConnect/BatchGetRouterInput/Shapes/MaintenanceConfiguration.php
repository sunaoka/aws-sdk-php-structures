<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PreferredDayTimeMaintenanceConfiguration|null $PreferredDayTime
 * @property DefaultMaintenanceConfiguration|null $Default
 */
class MaintenanceConfiguration extends Shape
{
    /**
     * @param array{
     *     PreferredDayTime?: PreferredDayTimeMaintenanceConfiguration|null,
     *     Default?: DefaultMaintenanceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
