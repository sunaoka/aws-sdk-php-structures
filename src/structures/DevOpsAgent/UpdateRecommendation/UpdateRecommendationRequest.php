<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $recommendationId
 * @property 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS'|null $status
 * @property string|null $additionalContext
 * @property string|null $clientToken
 */
class UpdateRecommendationRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     recommendationId: string,
     *     status?: 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS'|null,
     *     additionalContext?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
