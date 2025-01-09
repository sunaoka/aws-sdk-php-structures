<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $agentCpuCores
 * @property string $agentVersion
 * @property list<ComponentVersion> $componentVersions
 * @property string $instanceId
 * @property string $instanceType
 * @property list<int> $reservedCpuCores
 */
class AgentDetails extends Shape
{
    /**
     * @param array{
     *     agentCpuCores?: list<int>,
     *     agentVersion: string,
     *     componentVersions: list<ComponentVersion>,
     *     instanceId: string,
     *     instanceType: string,
     *     reservedCpuCores?: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
