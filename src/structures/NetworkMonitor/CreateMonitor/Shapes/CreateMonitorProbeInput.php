<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceArn
 * @property string $destination
 * @property int $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int $packetSize
 * @property array<string, string> $probeTags
 */
class CreateMonitorProbeInput extends Shape
{
    /**
     * @param array{
     *     sourceArn: string,
     *     destination: string,
     *     destinationPort?: int,
     *     protocol: 'TCP'|'ICMP',
     *     packetSize?: int,
     *     probeTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
