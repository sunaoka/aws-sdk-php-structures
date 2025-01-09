<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficPolicyId
 * @property int $TrafficPolicyVersion
 * @property string $HostedZoneIdMarker
 * @property string $TrafficPolicyInstanceNameMarker
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $TrafficPolicyInstanceTypeMarker
 * @property string $MaxItems
 */
class ListTrafficPolicyInstancesByPolicyRequest extends Request
{
    /**
     * @param array{
     *     TrafficPolicyId: string,
     *     TrafficPolicyVersion: int,
     *     HostedZoneIdMarker?: string,
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
