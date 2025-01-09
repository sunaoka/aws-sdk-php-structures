<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TrafficPolicyInstance> $TrafficPolicyInstances
 * @property string $HostedZoneIdMarker
 * @property string $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $TrafficPolicyInstanceTypeMarker
 * @property bool $IsTruncated
 * @property string $MaxItems
 */
class ListTrafficPolicyInstancesResponse extends Response
{
}
