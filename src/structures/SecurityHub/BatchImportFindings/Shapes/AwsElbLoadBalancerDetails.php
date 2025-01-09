<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property list<AwsElbLoadBalancerBackendServerDescription> $BackendServerDescriptions
 * @property string $CanonicalHostedZoneName
 * @property string $CanonicalHostedZoneNameID
 * @property string $CreatedTime
 * @property string $DnsName
 * @property AwsElbLoadBalancerHealthCheck $HealthCheck
 * @property list<AwsElbLoadBalancerInstance> $Instances
 * @property list<AwsElbLoadBalancerListenerDescription> $ListenerDescriptions
 * @property AwsElbLoadBalancerAttributes $LoadBalancerAttributes
 * @property string $LoadBalancerName
 * @property AwsElbLoadBalancerPolicies $Policies
 * @property string $Scheme
 * @property list<string> $SecurityGroups
 * @property AwsElbLoadBalancerSourceSecurityGroup $SourceSecurityGroup
 * @property list<string> $Subnets
 * @property string $VpcId
 */
class AwsElbLoadBalancerDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     BackendServerDescriptions?: list<AwsElbLoadBalancerBackendServerDescription>,
     *     CanonicalHostedZoneName?: string,
     *     CanonicalHostedZoneNameID?: string,
     *     CreatedTime?: string,
     *     DnsName?: string,
     *     HealthCheck?: AwsElbLoadBalancerHealthCheck,
     *     Instances?: list<AwsElbLoadBalancerInstance>,
     *     ListenerDescriptions?: list<AwsElbLoadBalancerListenerDescription>,
     *     LoadBalancerAttributes?: AwsElbLoadBalancerAttributes,
     *     LoadBalancerName?: string,
     *     Policies?: AwsElbLoadBalancerPolicies,
     *     Scheme?: string,
     *     SecurityGroups?: list<string>,
     *     SourceSecurityGroup?: AwsElbLoadBalancerSourceSecurityGroup,
     *     Subnets?: list<string>,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
