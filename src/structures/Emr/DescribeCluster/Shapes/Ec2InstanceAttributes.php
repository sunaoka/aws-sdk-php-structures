<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ec2KeyName
 * @property string|null $Ec2SubnetId
 * @property list<string>|null $RequestedEc2SubnetIds
 * @property string|null $Ec2AvailabilityZone
 * @property list<string>|null $RequestedEc2AvailabilityZones
 * @property string|null $IamInstanceProfile
 * @property string|null $EmrManagedMasterSecurityGroup
 * @property string|null $EmrManagedSlaveSecurityGroup
 * @property string|null $ServiceAccessSecurityGroup
 * @property list<string>|null $AdditionalMasterSecurityGroups
 * @property list<string>|null $AdditionalSlaveSecurityGroups
 */
class Ec2InstanceAttributes extends Shape
{
    /**
     * @param array{
     *     Ec2KeyName?: string|null,
     *     Ec2SubnetId?: string|null,
     *     RequestedEc2SubnetIds?: list<string>|null,
     *     Ec2AvailabilityZone?: string|null,
     *     RequestedEc2AvailabilityZones?: list<string>|null,
     *     IamInstanceProfile?: string|null,
     *     EmrManagedMasterSecurityGroup?: string|null,
     *     EmrManagedSlaveSecurityGroup?: string|null,
     *     ServiceAccessSecurityGroup?: string|null,
     *     AdditionalMasterSecurityGroups?: list<string>|null,
     *     AdditionalSlaveSecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
