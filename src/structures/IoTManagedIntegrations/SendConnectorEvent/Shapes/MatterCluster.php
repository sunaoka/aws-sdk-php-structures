<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property MatterAttributes|null $attributes
 * @property array<string, MatterFields>|null $commands
 * @property array<string, MatterFields>|null $events
 */
class MatterCluster extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     attributes?: MatterAttributes|null,
     *     commands?: array<string, MatterFields>|null,
     *     events?: array<string, MatterFields>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
