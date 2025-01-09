<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource> $outputSourceConfig
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workflowArn
 * @property string $workflowName
 */
class GetIdMappingWorkflowResponse extends Response
{
}
