<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailabilityZone>|null $AvailabilityZones
 * @property string|null $CanonicalHostedZoneId
 * @property string|null $CreatedTime
 * @property string|null $DNSName
 * @property string|null $IpAddressType
 * @property string|null $Scheme
 * @property list<string>|null $SecurityGroups
 * @property LoadBalancerState|null $State
 * @property string|null $Type
 * @property string|null $VpcId
 * @property list<AwsElbv2LoadBalancerAttribute>|null $LoadBalancerAttributes
 */
class AwsElbv2LoadBalancerDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<AvailabilityZone>|null,
     *     CanonicalHostedZoneId?: string|null,
     *     CreatedTime?: string|null,
     *     DNSName?: string|null,
     *     IpAddressType?: string|null,
     *     Scheme?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     State?: LoadBalancerState|null,
     *     Type?: string|null,
     *     VpcId?: string|null,
     *     LoadBalancerAttributes?: list<AwsElbv2LoadBalancerAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
