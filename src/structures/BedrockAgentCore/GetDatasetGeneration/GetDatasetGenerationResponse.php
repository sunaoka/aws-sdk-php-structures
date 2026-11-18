<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $generationId
 * @property string $name
 * @property string|null $description
 * @property string $datasetId
 * @property 'FIXED'|'DYNAMIC' $scenarioType
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'DELETING' $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property Shapes\GenerationSourceRecord|null $source
 * @property Shapes\GenerationResults|null $generationResults
 * @property Shapes\RedactionSummary|null $redactionSummary
 * @property list<Shapes\GenerationErrorDetail>|null $errorDetails
 */
class GetDatasetGenerationResponse extends Response
{
}
