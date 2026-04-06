<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property string|null $description
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property string $roleArn
 */
class CreateMatchingWorkflowResponse extends Response
{
}
