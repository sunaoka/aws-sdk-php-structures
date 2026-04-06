<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property Shapes\IncrementalRunConfig|null $incrementalRunConfig
 * @property list<Shapes\InputSource> $inputSourceConfig
 * @property list<Shapes\OutputSource> $outputSourceConfig
 * @property Shapes\ResolutionTechniques $resolutionTechniques
 * @property string $roleArn
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workflowArn
 * @property string $workflowName
 */
class GetMatchingWorkflowResponse extends Response
{
}
