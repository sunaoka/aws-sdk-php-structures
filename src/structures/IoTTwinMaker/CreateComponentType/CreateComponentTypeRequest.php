<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property bool $isSingleton
 * @property string $componentTypeId
 * @property string $description
 * @property array<string, Shapes\PropertyDefinitionRequest> $propertyDefinitions
 * @property list<string> $extendsFrom
 * @property array<string, Shapes\FunctionRequest> $functions
 * @property array<string, string> $tags
 * @property array<string, Shapes\PropertyGroupRequest> $propertyGroups
 * @property string $componentTypeName
 * @property array<string, Shapes\CompositeComponentTypeRequest> $compositeComponentTypes
 */
class CreateComponentTypeRequest extends Request
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
     *     tags?: array<string, string>,
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
