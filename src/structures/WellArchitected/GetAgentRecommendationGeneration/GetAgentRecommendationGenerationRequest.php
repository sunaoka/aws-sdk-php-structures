<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendationGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property string $generationId
 */
class GetAgentRecommendationGenerationRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     generationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
