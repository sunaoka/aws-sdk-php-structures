<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $probeId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED' $state
 * @property string $destination
 * @property int<0, 65536> $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int<56, 8500> $packetSize
 */
class UpdateProbeRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     probeId: string,
     *     state?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED',
     *     destination?: string,
     *     destinationPort?: int<0, 65536>,
     *     protocol?: 'TCP'|'ICMP',
     *     packetSize?: int<56, 8500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
