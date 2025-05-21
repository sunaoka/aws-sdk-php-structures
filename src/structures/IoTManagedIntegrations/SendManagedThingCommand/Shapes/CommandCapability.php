<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendManagedThingCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $version
 * @property list<CapabilityAction> $actions
 */
class CommandCapability extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     version: string,
     *     actions: list<CapabilityAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
