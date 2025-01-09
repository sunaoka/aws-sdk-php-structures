<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property StateTemplateUpdateStrategy $stateTemplateUpdateStrategy
 */
class StateTemplateAssociation extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     stateTemplateUpdateStrategy: StateTemplateUpdateStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
