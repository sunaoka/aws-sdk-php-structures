<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $HostedZoneId
 * @property string $Name
 * @property int<0, 2147483647> $TTL
 * @property string $State
 * @property string $Message
 * @property string $TrafficPolicyId
 * @property int<1, 1000> $TrafficPolicyVersion
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $TrafficPolicyType
 */
class TrafficPolicyInstance extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     HostedZoneId: string,
     *     Name: string,
     *     TTL: int<0, 2147483647>,
     *     State: string,
     *     Message: string,
     *     TrafficPolicyId: string,
     *     TrafficPolicyVersion: int<1, 1000>,
     *     TrafficPolicyType: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
