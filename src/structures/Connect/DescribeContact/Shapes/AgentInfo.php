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
     *     Capabilities?: ParticipantCapabilities|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
