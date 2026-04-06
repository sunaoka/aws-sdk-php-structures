<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workflowArn
 * @property string $workflowName
 */
class GetIdMappingWorkflowResponse extends Response
{
}
