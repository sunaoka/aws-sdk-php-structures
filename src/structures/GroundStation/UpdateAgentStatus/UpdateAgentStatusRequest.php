<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateAgentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $taskId
 * @property Shapes\AggregateStatus $aggregateStatus
 * @property list<Shapes\ComponentStatusData> $componentStatuses
 */
class UpdateAgentStatusRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     taskId: string,
     *     aggregateStatus: Shapes\AggregateStatus,
     *     componentStatuses: list<Shapes\ComponentStatusData>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
