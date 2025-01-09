<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $TrafficPolicyInstanceTypeMarker
 * @property string $MaxItems
 */
class ListTrafficPolicyInstancesByHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     TrafficPolicyInstanceNameMarker?: string,
     *     TrafficPolicyInstanceTypeMarker?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
