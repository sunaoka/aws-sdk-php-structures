<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailabilityZone> $AvailabilityZones
 * @property string $CanonicalHostedZoneId
 * @property string $CreatedTime
 * @property string $DNSName
 * @property string $IpAddressType
 * @property string $Scheme
 * @property list<string> $SecurityGroups
 * @property LoadBalancerState $State
 * @property string $Type
 * @property string $VpcId
 * @property list<AwsElbv2LoadBalancerAttribute> $LoadBalancerAttributes
 */
class AwsElbv2LoadBalancerDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<AvailabilityZone>,
     *     CanonicalHostedZoneId?: string,
     *     CreatedTime?: string,
     *     DNSName?: string,
     *     IpAddressType?: string,
     *     Scheme?: string,
     *     SecurityGroups?: list<string>,
     *     State?: LoadBalancerState,
     *     Type?: string,
     *     VpcId?: string,
     *     LoadBalancerAttributes?: list<AwsElbv2LoadBalancerAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
