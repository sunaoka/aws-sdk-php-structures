<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $idNamespaceName
 * @property string $idNamespaceArn
 * @property string|null $description
 * @property list<Shapes\IdNamespaceInputSource>|null $inputSourceConfig
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties>|null $idMappingWorkflowProperties
 * @property 'SOURCE'|'TARGET' $type
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class CreateIdNamespaceResponse extends Response
{
}
