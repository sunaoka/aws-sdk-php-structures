<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recommendationId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING' $status
 */
class DeleteRecommendationResponse extends Response
{
}
