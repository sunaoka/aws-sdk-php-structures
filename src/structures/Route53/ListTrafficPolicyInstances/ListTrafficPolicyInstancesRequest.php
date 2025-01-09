<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneIdMarker
 * @property string $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $TrafficPolicyInstanceTypeMarker
 * @property string $MaxItems
 */
class ListTrafficPolicyInstancesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneIdMarker?: string,
     *     TrafficPolicyInstanceNameMarker?: string,
     *     TrafficPolicyInstanceTypeMarker?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
