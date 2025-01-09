<?php

namespace Sunaoka\Aws\Structures\Omics\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETED'|'FAILED'|'INACTIVE' $status
 * @property 'PRIVATE'|'READY2RUN' $type
 * @property string $name
 * @property string $description
 * @property 'WDL'|'NEXTFLOW'|'CWL' $engine
 * @property string $definition
 * @property string $main
 * @property string $digest
 * @property array<string, Shapes\WorkflowParameter> $parameterTemplate
 * @property int<0, 100000> $storageCapacity
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $statusMessage
 * @property array<string, string> $tags
 * @property array<string, string> $metadata
 * @property 'GPU' $accelerators
 */
class GetWorkflowResponse extends Response
{
}
