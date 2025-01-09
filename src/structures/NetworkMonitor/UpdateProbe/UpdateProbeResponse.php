<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $probeId
 * @property string $probeArn
 * @property string $sourceArn
 * @property string $destination
 * @property int $destinationPort
 * @property 'TCP'|'ICMP' $protocol
 * @property int $packetSize
 * @property 'IPV4'|'IPV6' $addressFamily
 * @property string $vpcId
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR'|'DELETING'|'DELETED' $state
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string> $tags
 */
class UpdateProbeResponse extends Response
{
}
