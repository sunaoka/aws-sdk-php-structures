<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property list<AwsElbLoadBalancerBackendServerDescription>|null $BackendServerDescriptions
 * @property string|null $CanonicalHostedZoneName
 * @property string|null $CanonicalHostedZoneNameID
 * @property string|null $CreatedTime
 * @property string|null $DnsName
 * @property AwsElbLoadBalancerHealthCheck|null $HealthCheck
 * @property list<AwsElbLoadBalancerInstance>|null $Instances
 * @property list<AwsElbLoadBalancerListenerDescription>|null $ListenerDescriptions
 * @property AwsElbLoadBalancerAttributes|null $LoadBalancerAttributes
 * @property string|null $LoadBalancerName
 * @property AwsElbLoadBalancerPolicies|null $Policies
 * @property string|null $Scheme
 * @property list<string>|null $SecurityGroups
 * @property AwsElbLoadBalancerSourceSecurityGroup|null $SourceSecurityGroup
 * @property list<string>|null $Subnets
 * @property string|null $VpcId
 */
class AwsElbLoadBalancerDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackendServerDescriptions?: list<AwsElbLoadBalancerBackendServerDescription>|null,
     *     CanonicalHostedZoneName?: string|null,
     *     CanonicalHostedZoneNameID?: string|null,
     *     CreatedTime?: string|null,
     *     DnsName?: string|null,
     *     HealthCheck?: AwsElbLoadBalancerHealthCheck|null,
     *     Instances?: list<AwsElbLoadBalancerInstance>|null,
     *     ListenerDescriptions?: list<AwsElbLoadBalancerListenerDescription>|null,
     *     LoadBalancerAttributes?: AwsElbLoadBalancerAttributes|null,
     *     LoadBalancerName?: string|null,
     *     Policies?: AwsElbLoadBalancerPolicies|null,
     *     Scheme?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     SourceSecurityGroup?: AwsElbLoadBalancerSourceSecurityGroup|null,
     *     Subnets?: list<string>|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
