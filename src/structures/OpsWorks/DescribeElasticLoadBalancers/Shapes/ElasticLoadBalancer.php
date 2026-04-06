<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticLoadBalancerName
 * @property string|null $Region
 * @property string|null $DnsName
 * @property string|null $StackId
 * @property string|null $LayerId
 * @property string|null $VpcId
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $Ec2InstanceIds
 */
class ElasticLoadBalancer extends Shape
{
    /**
     * @param array{
     *     ElasticLoadBalancerName?: string|null,
     *     Region?: string|null,
     *     DnsName?: string|null,
     *     StackId?: string|null,
     *     LayerId?: string|null,
     *     VpcId?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     Ec2InstanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
