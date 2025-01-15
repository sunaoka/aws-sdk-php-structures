<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property bool|null $isSingleton
 * @property string $componentTypeId
 * @property string|null $description
 * @property array<string, Shapes\PropertyDefinitionResponse>|null $propertyDefinitions
 * @property list<string>|null $extendsFrom
 * @property array<string, Shapes\FunctionResponse>|null $functions
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string $arn
 * @property bool|null $isAbstract
 * @property bool|null $isSchemaInitialized
 * @property Shapes\Status|null $status
 * @property array<string, Shapes\PropertyGroupResponse>|null $propertyGroups
 * @property string|null $syncSource
 * @property string|null $componentTypeName
 * @property array<string, Shapes\CompositeComponentTypeResponse>|null $compositeComponentTypes
 */
class GetComponentTypeResponse extends Response
{
}
