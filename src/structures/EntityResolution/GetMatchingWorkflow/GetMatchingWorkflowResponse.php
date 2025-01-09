<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property Shapes\IncrementalRunConfig $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workflowArn
 * @property string $workflowName
 */
class GetMatchingWorkflowResponse extends Response
{
}
