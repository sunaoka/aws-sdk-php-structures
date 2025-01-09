<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerName
 * @property string $DNSName
 * @property string $CanonicalHostedZoneName
 * @property string $CanonicalHostedZoneNameID
 * @property list<ListenerDescription> $ListenerDescriptions
 * @property Policies $Policies
 * @property list<BackendServerDescription> $BackendServerDescriptions
 * @property list<string> $AvailabilityZones
 * @property list<string> $Subnets
 * @property string $VPCId
 * @property list<Instance> $Instances
 * @property HealthCheck $HealthCheck
 * @property SourceSecurityGroup $SourceSecurityGroup
 * @property list<string> $SecurityGroups
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Scheme
 */
class LoadBalancerDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string,
     *     DNSName?: string,
     *     CanonicalHostedZoneName?: string,
     *     CanonicalHostedZoneNameID?: string,
     *     ListenerDescriptions?: list<ListenerDescription>,
     *     Policies?: Policies,
     *     BackendServerDescriptions?: list<BackendServerDescription>,
     *     AvailabilityZones?: list<string>,
     *     Subnets?: list<string>,
     *     VPCId?: string,
     *     Instances?: list<Instance>,
     *     HealthCheck?: HealthCheck,
     *     SourceSecurityGroup?: SourceSecurityGroup,
     *     SecurityGroups?: list<string>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Scheme?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
