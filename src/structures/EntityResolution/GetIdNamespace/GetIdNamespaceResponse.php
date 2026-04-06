<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null $idMappingWorkflowProperties
 * @property string $idNamespaceArn
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource>|null $inputSourceConfig
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property 'SOURCE'|'TARGET' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetIdNamespaceResponse extends Response
{
}
