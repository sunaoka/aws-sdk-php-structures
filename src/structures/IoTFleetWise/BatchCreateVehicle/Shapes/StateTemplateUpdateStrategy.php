<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PeriodicStateTemplateUpdateStrategy $periodic
 * @property OnChangeStateTemplateUpdateStrategy $onChange
 */
class StateTemplateUpdateStrategy extends Shape
{
    /**
     * @param array{
     *     periodic?: PeriodicStateTemplateUpdateStrategy,
     *     onChange?: OnChangeStateTemplateUpdateStrategy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
