<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $componentTypeId
 * @property array<string, PropertyRequest> $properties
 * @property array<string, ComponentPropertyGroupRequest> $propertyGroups
 */
class ComponentRequest extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     componentTypeId?: string,
     *     properties?: array<string, PropertyRequest>,
     *     propertyGroups?: array<string, ComponentPropertyGroupRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
