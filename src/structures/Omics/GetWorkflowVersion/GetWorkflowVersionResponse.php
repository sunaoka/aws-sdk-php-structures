<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflowVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $workflowId
 * @property string|null $versionName
 * @property 'GPU'|null $accelerators
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property string|null $definition
 * @property string|null $digest
 * @property 'WDL'|'NEXTFLOW'|'CWL'|null $engine
 * @property string|null $main
 * @property array<string, string>|null $metadata
 * @property array<string, Shapes\WorkflowParameter>|null $parameterTemplate
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property string|null $statusMessage
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property int<0, 100000>|null $storageCapacity
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property array<string, string>|null $tags
 * @property string|null $uuid
 * @property string|null $workflowBucketOwnerId
 * @property Shapes\ContainerRegistryMap|null $containerRegistryMap
 * @property string|null $readme
 * @property Shapes\DefinitionRepositoryDetails|null $definitionRepositoryDetails
 * @property string|null $readmePath
 */
class GetWorkflowVersionResponse extends Response
{
}
