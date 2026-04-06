<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByHostedZone;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TrafficPolicyInstance> $TrafficPolicyInstances
 * @property string|null $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $TrafficPolicyInstanceTypeMarker
 * @property bool $IsTruncated
 * @property string $MaxItems
 */
class ListTrafficPolicyInstancesByHostedZoneResponse extends Response
{
}
