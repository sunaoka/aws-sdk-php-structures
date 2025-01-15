<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $probeId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED'|null $state
 * @property string|null $destination
 * @property int<0, 65536>|null $destinationPort
 * @property 'TCP'|'ICMP'|null $protocol
 * @property int<56, 8500>|null $packetSize
 */
class UpdateProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probeId: string,
     *     state?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED'|null,
     *     destination?: string|null,
     *     destinationPort?: int<0, 65536>|null,
     *     protocol?: 'TCP'|'ICMP'|null,
     *     packetSize?: int<56, 8500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
