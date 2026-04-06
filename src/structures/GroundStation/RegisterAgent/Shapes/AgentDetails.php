<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentVersion
 * @property string $instanceId
 * @property string $instanceType
 * @property list<int>|null $reservedCpuCores
 * @property list<int>|null $agentCpuCores
 * @property list<ComponentVersion> $componentVersions
 */
class AgentDetails extends Shape
{
    /**
     * @param array{
     *     agentVersion: string,
     *     instanceId: string,
     *     instanceType: string,
     *     reservedCpuCores?: list<int>|null,
     *     agentCpuCores?: list<int>|null,
     *     componentVersions: list<ComponentVersion>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
