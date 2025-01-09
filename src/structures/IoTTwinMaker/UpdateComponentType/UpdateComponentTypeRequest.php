<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property bool $isSingleton
 * @property string $componentTypeId
 * @property string $description
 * @property array<string, Shapes\PropertyDefinitionRequest> $propertyDefinitions
 * @property list<string> $extendsFrom
 * @property array<string, Shapes\FunctionRequest> $functions
 * @property array<string, Shapes\PropertyGroupRequest> $propertyGroups
 * @property string $componentTypeName
 * @property array<string, Shapes\CompositeComponentTypeRequest> $compositeComponentTypes
 */
class UpdateComponentTypeRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     isSingleton?: bool,
     *     componentTypeId: string,
     *     description?: string,
     *     propertyDefinitions?: array<string, Shapes\PropertyDefinitionRequest>,
     *     extendsFrom?: list<string>,
     *     functions?: array<string, Shapes\FunctionRequest>,
     *     propertyGroups?: array<string, Shapes\PropertyGroupRequest>,
     *     componentTypeName?: string,
     *     compositeComponentTypes?: array<string, Shapes\CompositeComponentTypeRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
