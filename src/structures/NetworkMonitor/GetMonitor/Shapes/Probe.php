<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $probeId
 * @property string|null $probeArn
 * @property string $sourceArn
 * @property string $destination
 * @property int<0, 65536>|null $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int<56, 8500>|null $packetSize
 * @property 'IPV4'|'IPV6'|null $addressFamily
 * @property string|null $vpcId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED'|null $state
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property array<string, string>|null $tags
 */
class Probe extends Shape
{
    /**
     * @param array{
     *     probeId?: string|null,
     *     probeArn?: string|null,
     *     sourceArn: string,
     *     destination: string,
     *     destinationPort?: int<0, 65536>|null,
     *     protocol: 'TCP'|'ICMP',
     *     packetSize?: int<56, 8500>|null,
     *     addressFamily?: 'IPV4'|'IPV6'|null,
     *     vpcId?: string|null,
     *     state?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
