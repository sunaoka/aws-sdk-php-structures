<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointId
 * @property list<StateCapability> $capabilities
 */
class StateEndpoint extends Shape
{
    /**
     * @param array{
     *     endpointId: string,
     *     capabilities: list<StateCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
