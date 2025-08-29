<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueueReference|null $Queue
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null $Channel
 * @property RoutingProfileReference|null $RoutingProfile
 * @property string|null $RoutingStepExpression
 * @property AgentStatusIdentifier|null $AgentStatus
 */
class Dimensions extends Shape
{
    /**
     * @param array{
     *     Queue?: QueueReference|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null,
     *     RoutingProfile?: RoutingProfileReference|null,
     *     RoutingStepExpression?: string|null,
     *     AgentStatus?: AgentStatusIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
