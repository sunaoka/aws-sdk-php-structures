<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $TrafficPolicyInstanceTypeMarker
 * @property string|null $MaxItems
 */
class ListTrafficPolicyInstancesByHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     TrafficPolicyInstanceNameMarker?: string|null,
     *     TrafficPolicyInstanceTypeMarker?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
