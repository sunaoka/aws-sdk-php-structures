<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $probeId
 * @property string $probeArn
 * @property string $sourceArn
 * @property string $destination
 * @property int<0, 65536> $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int<56, 8500> $packetSize
 * @property 'IPV4'|'IPV6' $addressFamily
 * @property string $vpcId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED' $state
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string> $tags
 */
class Probe extends Shape
{
    /**
     * @param array{
     *     probeId?: string,
     *     probeArn?: string,
     *     sourceArn: string,
     *     destination: string,
     *     destinationPort?: int<0, 65536>,
     *     protocol: 'TCP'|'ICMP',
     *     packetSize?: int<56, 8500>,
     *     addressFamily?: 'IPV4'|'IPV6',
     *     vpcId?: string,
     *     state?: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
