<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ec2KeyName
 * @property string $Ec2SubnetId
 * @property list<string> $RequestedEc2SubnetIds
 * @property string $Ec2AvailabilityZone
 * @property list<string> $RequestedEc2AvailabilityZones
 * @property string $IamInstanceProfile
 * @property string $EmrManagedMasterSecurityGroup
 * @property string $EmrManagedSlaveSecurityGroup
 * @property string $ServiceAccessSecurityGroup
 * @property list<string> $AdditionalMasterSecurityGroups
 * @property list<string> $AdditionalSlaveSecurityGroups
 */
class Ec2InstanceAttributes extends Shape
{
    /**
     * @param array{
     *     Ec2KeyName?: string,
     *     Ec2SubnetId?: string,
     *     RequestedEc2SubnetIds?: list<string>,
     *     Ec2AvailabilityZone?: string,
     *     RequestedEc2AvailabilityZones?: list<string>,
     *     IamInstanceProfile?: string,
     *     EmrManagedMasterSecurityGroup?: string,
     *     EmrManagedSlaveSecurityGroup?: string,
     *     ServiceAccessSecurityGroup?: string,
     *     AdditionalMasterSecurityGroups?: list<string>,
     *     AdditionalSlaveSecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
