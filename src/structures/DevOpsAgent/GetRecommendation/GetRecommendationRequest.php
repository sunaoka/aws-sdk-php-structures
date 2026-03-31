<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $recommendationId
 * @property int|null $recommendationVersion
 */
class GetRecommendationRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     recommendationId: string,
     *     recommendationVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
