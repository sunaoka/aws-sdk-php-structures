<?php

namespace Sunaoka\Aws\Structures\WellArchitected\StartAgentRecommendationGeneration;

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
 */
class StartAgentRecommendationGenerationResponse extends Response
{
}
