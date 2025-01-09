<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateProbe;

use Sunaoka\Aws\Structures\Response;

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
class CreateProbeResponse extends Response
{
}
