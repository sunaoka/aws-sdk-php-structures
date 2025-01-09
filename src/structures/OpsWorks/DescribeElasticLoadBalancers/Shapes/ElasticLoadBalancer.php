<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeElasticLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticLoadBalancerName
 * @property string $Region
 * @property string $DnsName
 * @property string $StackId
 * @property string $LayerId
 * @property string $VpcId
 * @property list<string> $AvailabilityZones
 * @property list<string> $SubnetIds
 * @property list<string> $Ec2InstanceIds
 */
class ElasticLoadBalancer extends Shape
{
    /**
     * @param array{
     *     ElasticLoadBalancerName?: string,
     *     Region?: string,
     *     DnsName?: string,
     *     StackId?: string,
     *     LayerId?: string,
     *     VpcId?: string,
     *     AvailabilityZones?: list<string>,
     *     SubnetIds?: list<string>,
     *     Ec2InstanceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
