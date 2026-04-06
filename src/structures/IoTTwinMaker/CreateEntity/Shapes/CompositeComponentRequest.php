<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property array<string, PropertyRequest>|null $properties
 * @property array<string, ComponentPropertyGroupRequest>|null $propertyGroups
 */
class CompositeComponentRequest extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     properties?: array<string, PropertyRequest>|null,
     *     propertyGroups?: array<string, ComponentPropertyGroupRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
