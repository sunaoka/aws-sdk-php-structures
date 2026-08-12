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
 * @property Shapes\Document|null $additionalContext
 * @property Shapes\Scope|null $scope
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property Shapes\Progress|null $progress
 * @property Shapes\ErrorDetails|null $errorDetails
 */
class GetAgentRecommendationGenerationResponse extends Response
{
}
