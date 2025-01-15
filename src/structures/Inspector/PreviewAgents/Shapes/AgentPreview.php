<?php

namespace Sunaoka\Aws\Structures\Inspector\PreviewAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostname
 * @property string $agentId
 * @property string|null $autoScalingGroup
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null $agentHealth
 * @property string|null $agentVersion
 * @property string|null $operatingSystem
 * @property string|null $kernelVersion
 * @property string|null $ipv4Address
 */
class AgentPreview extends Shape
{
    /**
     * @param array{
     *     hostname?: string|null,
     *     agentId: string,
     *     autoScalingGroup?: string|null,
     *     agentHealth?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null,
     *     agentVersion?: string|null,
     *     operatingSystem?: string|null,
     *     kernelVersion?: string|null,
     *     ipv4Address?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
