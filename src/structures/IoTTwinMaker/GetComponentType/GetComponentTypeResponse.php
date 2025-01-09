<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property bool $isSingleton
 * @property string $componentTypeId
 * @property string $description
 * @property array<string, Shapes\PropertyDefinitionResponse> $propertyDefinitions
 * @property list<string> $extendsFrom
 * @property array<string, Shapes\FunctionResponse> $functions
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string $arn
 * @property bool $isAbstract
 * @property bool $isSchemaInitialized
 * @property Shapes\Status $status
 * @property array<string, Shapes\PropertyGroupResponse> $propertyGroups
 * @property string $syncSource
 * @property string $componentTypeName
 * @property array<string, Shapes\CompositeComponentTypeResponse> $compositeComponentTypes
 */
class GetComponentTypeResponse extends Response
{
}
