<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $description
 * @property Shapes\IncrementalRunConfig $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property string $workflowName
 */
class UpdateMatchingWorkflowResponse extends Response
{
}
