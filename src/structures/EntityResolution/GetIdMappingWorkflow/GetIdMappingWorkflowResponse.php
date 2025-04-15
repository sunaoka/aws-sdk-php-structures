<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property string|null $description
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 */
class GetIdMappingWorkflowResponse extends Response
{
}
