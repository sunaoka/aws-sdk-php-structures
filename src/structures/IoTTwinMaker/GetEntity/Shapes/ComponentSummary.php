<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentTypeId
 * @property string|null $definedIn
 * @property string|null $description
 * @property array<string, ComponentPropertyGroupResponse>|null $propertyGroups
 * @property Status $status
 * @property string|null $syncSource
 * @property string|null $componentPath
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     componentName: string,
     *     componentTypeId: string,
     *     definedIn?: string|null,
     *     description?: string|null,
     *     propertyGroups?: array<string, ComponentPropertyGroupResponse>|null,
     *     status: Status,
     *     syncSource?: string|null,
     *     componentPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
