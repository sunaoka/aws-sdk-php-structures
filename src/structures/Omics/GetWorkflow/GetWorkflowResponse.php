<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE'|null $status
 * @property 'PRIVATE'|'READY2RUN'|null $type
 * @property string|null $name
 * @property string|null $description
 * @property 'WDL'|'NEXTFLOW'|'CWL'|null $engine
 * @property string|null $definition
 * @property string|null $main
 * @property string|null $digest
 * @property array<string, Shapes\WorkflowParameter>|null $parameterTemplate
 * @property int<0, 100000>|null $storageCapacity
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $statusMessage
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $metadata
 * @property 'GPU'|null $accelerators
 */
class GetWorkflowResponse extends Response
{
}
