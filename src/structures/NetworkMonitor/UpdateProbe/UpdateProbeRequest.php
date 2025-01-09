<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $probeId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED' $state
 * @property string $destination
 * @property int $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int $packetSize
 */
class UpdateProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probeId: string,
     *     state?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED',
     *     destination?: string,
     *     destinationPort?: int,
     *     protocol?: 'TCP'|'ICMP',
     *     packetSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
