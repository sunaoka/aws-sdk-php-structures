<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties> $idMappingWorkflowProperties
 * @property string $idNamespaceArn
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource> $inputSourceConfig
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property 'SOURCE'|'TARGET' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetIdNamespaceResponse extends Response
{
}
