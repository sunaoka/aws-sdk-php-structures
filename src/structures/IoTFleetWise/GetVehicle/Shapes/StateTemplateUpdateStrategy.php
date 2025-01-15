<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PeriodicStateTemplateUpdateStrategy|null $periodic
 * @property OnChangeStateTemplateUpdateStrategy|null $onChange
 */
class StateTemplateUpdateStrategy extends Shape
{
    /**
     * @param array{
     *     periodic?: PeriodicStateTemplateUpdateStrategy|null,
     *     onChange?: OnChangeStateTemplateUpdateStrategy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
