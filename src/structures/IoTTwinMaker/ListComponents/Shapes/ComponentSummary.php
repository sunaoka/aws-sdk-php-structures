<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentTypeId
 * @property string $definedIn
 * @property string $description
 * @property array<string, ComponentPropertyGroupResponse> $propertyGroups
 * @property Status $status
 * @property string $syncSource
 * @property string $componentPath
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     componentName: string,
     *     componentTypeId: string,
     *     definedIn?: string,
     *     description?: string,
     *     propertyGroups?: array<string, ComponentPropertyGroupResponse>,
     *     status: Status,
     *     syncSource?: string,
     *     componentPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
