<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE'|'UPDATE'|'DELETE'|null $updateType
 * @property string|null $description
 * @property string|null $componentTypeId
 * @property array<string, PropertyRequest>|null $propertyUpdates
 * @property array<string, ComponentPropertyGroupRequest>|null $propertyGroupUpdates
 */
class ComponentUpdateRequest extends Shape
{
    /**
     * @param array{
     *     updateType?: 'CREATE'|'UPDATE'|'DELETE'|null,
     *     description?: string|null,
     *     componentTypeId?: string|null,
     *     propertyUpdates?: array<string, PropertyRequest>|null,
     *     propertyGroupUpdates?: array<string, ComponentPropertyGroupRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
