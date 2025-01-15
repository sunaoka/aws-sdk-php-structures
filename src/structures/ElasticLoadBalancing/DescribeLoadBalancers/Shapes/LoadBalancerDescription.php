<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerName
 * @property string|null $DNSName
 * @property string|null $CanonicalHostedZoneName
 * @property string|null $CanonicalHostedZoneNameID
 * @property list<ListenerDescription>|null $ListenerDescriptions
 * @property Policies|null $Policies
 * @property list<BackendServerDescription>|null $BackendServerDescriptions
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $Subnets
 * @property string|null $VPCId
 * @property list<Instance>|null $Instances
 * @property HealthCheck|null $HealthCheck
 * @property SourceSecurityGroup|null $SourceSecurityGroup
 * @property list<string>|null $SecurityGroups
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Scheme
 */
class LoadBalancerDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string|null,
     *     DNSName?: string|null,
     *     CanonicalHostedZoneName?: string|null,
     *     CanonicalHostedZoneNameID?: string|null,
     *     ListenerDescriptions?: list<ListenerDescription>|null,
     *     Policies?: Policies|null,
     *     BackendServerDescriptions?: list<BackendServerDescription>|null,
     *     AvailabilityZones?: list<string>|null,
     *     Subnets?: list<string>|null,
     *     VPCId?: string|null,
     *     Instances?: list<Instance>|null,
     *     HealthCheck?: HealthCheck|null,
     *     SourceSecurityGroup?: SourceSecurityGroup|null,
     *     SecurityGroups?: list<string>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Scheme?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
