<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ConnectedToAgentTimestamp
 * @property int<0, max>|null $AgentPauseDurationInSeconds
 * @property HierarchyGroups|null $HierarchyGroups
 * @property DeviceInfo|null $DeviceInfo
 * @property ParticipantCapabilities|null $Capabilities
 * @property int<0, max>|null $AfterContactWorkDuration
 * @property \Aws\Api\DateTimeResult|null $AfterContactWorkStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $AfterContactWorkEndTimestamp
 * @property int<0, max>|null $AgentInitiatedHoldDuration
 * @property list<StateTransition>|null $StateTransitions
 */
class AgentInfo extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ConnectedToAgentTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AgentPauseDurationInSeconds?: int<0, max>|null,
     *     HierarchyGroups?: HierarchyGroups|null,
     *     DeviceInfo?: DeviceInfo|null,
     *     Capabilities?: ParticipantCapabilities|null,
     *     AfterContactWorkDuration?: int<0, max>|null,
     *     AfterContactWorkStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AfterContactWorkEndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AgentInitiatedHoldDuration?: int<0, max>|null,
     *     StateTransitions?: list<StateTransition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
