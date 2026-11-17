<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $profileArn
 * @property string|null $name
 * @property 'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'ERROR' $status
 * @property \Aws\Api\DateTimeResult|null $estimatedCompletionTime
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property 'ONDEMAND'|'SCHEDULED'|'BASIC'|null $generationType
 * @property list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>|null $generationRecommendationTypes
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property Shapes\ErrorDetails|null $errorDetails
 * @property Shapes\SensitiveDocument|null $additionalContext
 * @property Shapes\Scope|null $scope
 * @property Shapes\Progress|null $progress
 */
class GetAgentRecommendationGenerationResponse extends Response
{
}
