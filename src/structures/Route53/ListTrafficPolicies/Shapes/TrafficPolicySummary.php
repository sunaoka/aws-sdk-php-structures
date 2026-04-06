<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $Type
 * @property int<1, 1000> $LatestVersion
 * @property int<1, 1000> $TrafficPolicyCount
 */
class TrafficPolicySummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     Type: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     LatestVersion: int<1, 1000>,
     *     TrafficPolicyCount: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
