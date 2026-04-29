<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommendationId
 */
class DeleteRecommendationRequest extends Request
{
    /**
     * @param array{recommendationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
