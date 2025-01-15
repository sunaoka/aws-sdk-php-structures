<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property bool|null $isSingleton
 * @property string $componentTypeId
 * @property string|null $description
 * @property array<string, Shapes\PropertyDefinitionRequest>|null $propertyDefinitions
 * @property list<string>|null $extendsFrom
 * @property array<string, Shapes\FunctionRequest>|null $functions
 * @property array<string, string>|null $tags
 * @property array<string, Shapes\PropertyGroupRequest>|null $propertyGroups
 * @property string|null $componentTypeName
 * @property array<string, Shapes\CompositeComponentTypeRequest>|null $compositeComponentTypes
 */
class CreateComponentTypeRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     isSingleton?: bool|null,
     *     componentTypeId: string,
     *     description?: string|null,
     *     propertyDefinitions?: array<string, Shapes\PropertyDefinitionRequest>|null,
     *     extendsFrom?: list<string>|null,
     *     functions?: array<string, Shapes\FunctionRequest>|null,
     *     tags?: array<string, string>|null,
     *     propertyGroups?: array<string, Shapes\PropertyGroupRequest>|null,
     *     componentTypeName?: string|null,
     *     compositeComponentTypes?: array<string, Shapes\CompositeComponentTypeRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
