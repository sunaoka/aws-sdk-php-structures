<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE'|'UPDATE'|'DELETE' $updateType
 * @property string $description
 * @property array<string, PropertyRequest> $propertyUpdates
 * @property array<string, ComponentPropertyGroupRequest> $propertyGroupUpdates
 */
class CompositeComponentUpdateRequest extends Shape
{
    /**
     * @param array{
     *     updateType?: 'CREATE'|'UPDATE'|'DELETE',
     *     description?: string,
     *     propertyUpdates?: array<string, PropertyRequest>,
     *     propertyGroupUpdates?: array<string, ComponentPropertyGroupRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
