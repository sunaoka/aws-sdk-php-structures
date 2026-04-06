<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property string|null $description
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class GetMatchingWorkflowResponse extends Response
{
}
