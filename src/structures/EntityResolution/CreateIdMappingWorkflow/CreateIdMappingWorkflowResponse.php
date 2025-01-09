<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $description
 * @property Shapes\IdMappingTechniques $idMappingTechniques
 * @property list<Shapes\IdMappingWorkflowInputSource> $inputSourceConfig
 * @property list<Shapes\IdMappingWorkflowOutputSource> $outputSourceConfig
 * @property string $roleArn
 * @property string $workflowArn
 * @property string $workflowName
 */
class CreateIdMappingWorkflowResponse extends Response
{
}
