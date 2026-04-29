<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recommendationId
 * @property string $recommendationArn
 * @property string $name
 * @property string|null $description
 * @property 'SYSTEM_PROMPT_RECOMMENDATION'|'TOOL_DESCRIPTION_RECOMMENDATION' $type
 * @property Shapes\RecommendationConfig $recommendationConfig
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\RecommendationResult|null $recommendationResult
 */
class GetRecommendationResponse extends Response
{
}
