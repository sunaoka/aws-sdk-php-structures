<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

use Sunaoka\Aws\Structures\Response;

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
class UpdateProbeResponse extends Response
{
}
