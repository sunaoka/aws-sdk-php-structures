<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MasterInstanceType
 * @property string|null $SlaveInstanceType
 * @property int|null $InstanceCount
 * @property list<InstanceGroupConfig>|null $InstanceGroups
 * @property list<InstanceFleetConfig>|null $InstanceFleets
 * @property string|null $Ec2KeyName
 * @property PlacementType|null $Placement
 * @property bool|null $KeepJobFlowAliveWhenNoSteps
 * @property bool|null $TerminationProtected
 * @property bool|null $UnhealthyNodeReplacement
 * @property string|null $HadoopVersion
 * @property string|null $Ec2SubnetId
 * @property list<string>|null $Ec2SubnetIds
 * @property string|null $EmrManagedMasterSecurityGroup
 * @property string|null $EmrManagedSlaveSecurityGroup
 * @property string|null $ServiceAccessSecurityGroup
 * @property list<string>|null $AdditionalMasterSecurityGroups
 * @property list<string>|null $AdditionalSlaveSecurityGroups
 */
class JobFlowInstancesConfig extends Shape
{
    /**
     * @param array{
     *     MasterInstanceType?: string|null,
     *     SlaveInstanceType?: string|null,
     *     InstanceCount?: int|null,
     *     InstanceGroups?: list<InstanceGroupConfig>|null,
     *     InstanceFleets?: list<InstanceFleetConfig>|null,
     *     Ec2KeyName?: string|null,
     *     Placement?: PlacementType|null,
     *     KeepJobFlowAliveWhenNoSteps?: bool|null,
     *     TerminationProtected?: bool|null,
     *     UnhealthyNodeReplacement?: bool|null,
     *     HadoopVersion?: string|null,
     *     Ec2SubnetId?: string|null,
     *     Ec2SubnetIds?: list<string>|null,
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
