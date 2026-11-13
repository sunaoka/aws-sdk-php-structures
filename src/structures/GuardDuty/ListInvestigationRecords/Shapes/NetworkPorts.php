<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetPort
 * @property string|null $RemotePort
 * @property string|null $ResolverPort
 * @property string|null $Ports
 * @property string|null $PortsUsed
 * @property int<0, max>|null $PortCount
 */
class NetworkPorts extends Shape
{
    /**
     * @param array{
     *     TargetPort?: string|null,
     *     RemotePort?: string|null,
     *     ResolverPort?: string|null,
     *     Ports?: string|null,
     *     PortsUsed?: string|null,
     *     PortCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
