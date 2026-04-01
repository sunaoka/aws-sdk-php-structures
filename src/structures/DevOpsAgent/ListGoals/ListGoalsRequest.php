<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListGoals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property 'ACTIVE'|'PAUSED'|'COMPLETE'|null $status
 * @property 'CUSTOMER_DEFINED'|'ONCALL_REPORT'|null $goalType
 * @property int<1, 100>|null $limit
 * @property string|null $nextToken
 */
class ListGoalsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     status?: 'ACTIVE'|'PAUSED'|'COMPLETE'|null,
     *     goalType?: 'CUSTOMER_DEFINED'|'ONCALL_REPORT'|null,
     *     limit?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
