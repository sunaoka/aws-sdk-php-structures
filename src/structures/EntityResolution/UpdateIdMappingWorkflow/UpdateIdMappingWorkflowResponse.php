<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property string|null $description
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource>|null $outputSourceConfig
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property string|null $roleArn
 */
class UpdateIdMappingWorkflowResponse extends Response
{
}
