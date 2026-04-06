<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentName
 * @property string|null $description
 * @property string|null $componentTypeId
 * @property Status|null $status
 * @property string|null $definedIn
 * @property array<string, PropertyResponse>|null $properties
 * @property array<string, ComponentPropertyGroupResponse>|null $propertyGroups
 * @property string|null $syncSource
 */
class ComponentResponse extends Shape
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     description?: string|null,
     *     componentTypeId?: string|null,
     *     status?: Status|null,
     *     definedIn?: string|null,
     *     properties?: array<string, PropertyResponse>|null,
     *     propertyGroups?: array<string, ComponentPropertyGroupResponse>|null,
     *     syncSource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
