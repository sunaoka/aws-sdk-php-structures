<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EnvironmentName
 * @property list<AutoScalingGroup>|null $AutoScalingGroups
 * @property list<Instance>|null $Instances
 * @property list<LaunchConfiguration>|null $LaunchConfigurations
 * @property list<LaunchTemplate>|null $LaunchTemplates
 * @property list<LoadBalancer>|null $LoadBalancers
 * @property list<Trigger>|null $Triggers
 * @property list<Queue>|null $Queues
 */
class EnvironmentResourceDescription extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string|null,
     *     AutoScalingGroups?: list<AutoScalingGroup>|null,
     *     Instances?: list<Instance>|null,
     *     LaunchConfigurations?: list<LaunchConfiguration>|null,
     *     LaunchTemplates?: list<LaunchTemplate>|null,
     *     LoadBalancers?: list<LoadBalancer>|null,
     *     Triggers?: list<Trigger>|null,
     *     Queues?: list<Queue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
