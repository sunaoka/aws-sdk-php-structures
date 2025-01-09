<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $description
 * @property string $componentTypeId
 * @property Status $status
 * @property string $definedIn
 * @property array<string, PropertyResponse> $properties
 * @property array<string, ComponentPropertyGroupResponse> $propertyGroups
 * @property string $syncSource
 * @property bool $areAllPropertiesReturned
 * @property array<string, ComponentSummary> $compositeComponents
 * @property bool $areAllCompositeComponentsReturned
 */
class ComponentResponse extends Shape
{
    /**
     * @param array{
     *     componentName?: string,
     *     description?: string,
     *     componentTypeId?: string,
     *     status?: Status,
     *     definedIn?: string,
     *     properties?: array<string, PropertyResponse>,
     *     propertyGroups?: array<string, ComponentPropertyGroupResponse>,
     *     syncSource?: string,
     *     areAllPropertiesReturned?: bool,
     *     compositeComponents?: array<string, ComponentSummary>,
     *     areAllCompositeComponentsReturned?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
