<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendManagedThingCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpointId
 * @property list<CommandCapability> $capabilities
 */
class CommandEndpoint extends Shape
{
    /**
     * @param array{
     *     endpointId: string,
     *     capabilities: list<CommandCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
