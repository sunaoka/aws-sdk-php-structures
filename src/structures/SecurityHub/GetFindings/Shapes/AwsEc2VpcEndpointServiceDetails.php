<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AcceptanceRequired
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $BaseEndpointDnsNames
 * @property bool|null $ManagesVpcEndpoints
 * @property list<string>|null $GatewayLoadBalancerArns
 * @property list<string>|null $NetworkLoadBalancerArns
 * @property string|null $PrivateDnsName
 * @property string|null $ServiceId
 * @property string|null $ServiceName
 * @property string|null $ServiceState
 * @property list<AwsEc2VpcEndpointServiceServiceTypeDetails>|null $ServiceType
 */
class AwsEc2VpcEndpointServiceDetails extends Shape
{
    /**
     * @param array{
     *     AcceptanceRequired?: bool|null,
     *     AvailabilityZones?: list<string>|null,
     *     BaseEndpointDnsNames?: list<string>|null,
     *     ManagesVpcEndpoints?: bool|null,
     *     GatewayLoadBalancerArns?: list<string>|null,
     *     NetworkLoadBalancerArns?: list<string>|null,
     *     PrivateDnsName?: string|null,
     *     ServiceId?: string|null,
     *     ServiceName?: string|null,
     *     ServiceState?: string|null,
     *     ServiceType?: list<AwsEc2VpcEndpointServiceServiceTypeDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
