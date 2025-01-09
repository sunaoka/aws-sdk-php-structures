<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property list<Shapes\IdNamespaceIdMappingWorkflowProperties> $idMappingWorkflowProperties
 * @property string $idNamespaceArn
 * @property string $idNamespaceName
 * @property list<Shapes\IdNamespaceInputSource> $inputSourceConfig
 * @property string $roleArn
 * @property 'SOURCE'|'TARGET' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateIdNamespaceResponse extends Response
{
}
