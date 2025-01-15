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
 * @property bool|null $areAllPropertiesReturned
 * @property array<string, ComponentSummary>|null $compositeComponents
 * @property bool|null $areAllCompositeComponentsReturned
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
     *     syncSource?: string|null,
     *     areAllPropertiesReturned?: bool|null,
     *     compositeComponents?: array<string, ComponentSummary>|null,
     *     areAllCompositeComponentsReturned?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
