<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property string|null $roleArn
 * @property string $workflowArn
 * @property string $workflowName
 */
class CreateIdMappingWorkflowResponse extends Response
{
}
