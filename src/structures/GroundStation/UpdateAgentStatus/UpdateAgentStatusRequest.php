<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property Shapes\AggregateStatus $aggregateStatus
 * @property list<Shapes\ComponentStatusData> $componentStatuses
 * @property string $taskId
 */
class UpdateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     aggregateStatus: Shapes\AggregateStatus,
     *     componentStatuses: list<Shapes\ComponentStatusData>,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
