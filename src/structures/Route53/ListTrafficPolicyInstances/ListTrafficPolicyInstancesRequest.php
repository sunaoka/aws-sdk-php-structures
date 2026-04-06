<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HostedZoneIdMarker
 * @property string|null $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $TrafficPolicyInstanceTypeMarker
 * @property string|null $MaxItems
 */
class ListTrafficPolicyInstancesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneIdMarker?: string|null,
     *     TrafficPolicyInstanceNameMarker?: string|null,
     *     TrafficPolicyInstanceTypeMarker?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
