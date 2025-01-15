<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property string $workflowArn
 * @property string $workflowName
 */
class CreateMatchingWorkflowResponse extends Response
{
}
