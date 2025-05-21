<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $version
 * @property CapabilityProperties|null $properties
 */
class StateCapability extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     version: string,
     *     properties?: CapabilityProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
