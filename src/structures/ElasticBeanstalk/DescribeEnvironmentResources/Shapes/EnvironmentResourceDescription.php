<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EnvironmentName
 * @property list<AutoScalingGroup> $AutoScalingGroups
 * @property list<Instance> $Instances
 * @property list<LaunchConfiguration> $LaunchConfigurations
 * @property list<LaunchTemplate> $LaunchTemplates
 * @property list<LoadBalancer> $LoadBalancers
 * @property list<Trigger> $Triggers
 * @property list<Queue> $Queues
 */
class EnvironmentResourceDescription extends Shape
{
    /**
     * @param array{
     *     EnvironmentName?: string,
     *     AutoScalingGroups?: list<AutoScalingGroup>,
     *     Instances?: list<Instance>,
     *     LaunchConfigurations?: list<LaunchConfiguration>,
     *     LaunchTemplates?: list<LaunchTemplate>,
     *     LoadBalancers?: list<LoadBalancer>,
     *     Triggers?: list<Trigger>,
     *     Queues?: list<Queue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
