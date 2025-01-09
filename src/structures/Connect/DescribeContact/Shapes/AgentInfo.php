<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ConnectedToAgentTimestamp
 * @property int<0, max> $AgentPauseDurationInSeconds
 * @property HierarchyGroups $HierarchyGroups
 * @property DeviceInfo $DeviceInfo
 * @property ParticipantCapabilities $Capabilities
 */
class AgentInfo extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ConnectedToAgentTimestamp?: \Aws\Api\DateTimeResult,
     *     AgentPauseDurationInSeconds?: int<0, max>,
     *     HierarchyGroups?: HierarchyGroups,
     *     DeviceInfo?: DeviceInfo,
     *     Capabilities?: ParticipantCapabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
