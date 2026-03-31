<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $taskId
 * @property string|null $goalId
 * @property 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS'|null $status
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $priority
 * @property int<1, 100>|null $limit
 * @property string|null $nextToken
 */
class ListRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId?: string|null,
     *     goalId?: string|null,
     *     status?: 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS'|null,
     *     priority?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     limit?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
