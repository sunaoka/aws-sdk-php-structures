<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AcceptanceRequired
 * @property list<string> $AvailabilityZones
 * @property list<string> $BaseEndpointDnsNames
 * @property bool $ManagesVpcEndpoints
 * @property list<string> $GatewayLoadBalancerArns
 * @property list<string> $NetworkLoadBalancerArns
 * @property string $PrivateDnsName
 * @property string $ServiceId
 * @property string $ServiceName
 * @property string $ServiceState
 * @property list<AwsEc2VpcEndpointServiceServiceTypeDetails> $ServiceType
 */
class AwsEc2VpcEndpointServiceDetails extends Shape
{
    /**
     * @param array{
     *     AcceptanceRequired?: bool,
     *     AvailabilityZones?: list<string>,
     *     BaseEndpointDnsNames?: list<string>,
     *     ManagesVpcEndpoints?: bool,
     *     GatewayLoadBalancerArns?: list<string>,
     *     NetworkLoadBalancerArns?: list<string>,
     *     PrivateDnsName?: string,
     *     ServiceId?: string,
     *     ServiceName?: string,
     *     ServiceState?: string,
     *     ServiceType?: list<AwsEc2VpcEndpointServiceServiceTypeDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
