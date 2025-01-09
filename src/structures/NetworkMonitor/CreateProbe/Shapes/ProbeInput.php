<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateProbe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceArn
 * @property string $destination
 * @property int<0, 65536> $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int<56, 8500> $packetSize
 * @property array<string, string> $tags
 */
class ProbeInput extends Shape
{
    /**
     * @param array{
     *     sourceArn: string,
     *     destination: string,
     *     destinationPort?: int<0, 65536>,
     *     protocol: 'TCP'|'ICMP',
     *     packetSize?: int<56, 8500>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
