<?php

namespace Sunaoka\Aws\Structures\Inspector\PreviewAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostname
 * @property string $agentId
 * @property string $autoScalingGroup
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN' $agentHealth
 * @property string $agentVersion
 * @property string $operatingSystem
 * @property string $kernelVersion
 * @property string $ipv4Address
 */
class AgentPreview extends Shape
{
    /**
     * @param array{
     *     hostname?: string,
     *     agentId: string,
     *     autoScalingGroup?: string,
     *     agentHealth?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN',
     *     agentVersion?: string,
     *     operatingSystem?: string,
     *     kernelVersion?: string,
     *     ipv4Address?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
