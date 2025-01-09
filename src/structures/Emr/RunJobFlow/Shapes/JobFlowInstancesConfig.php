<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterInstanceType
 * @property string $SlaveInstanceType
 * @property int $InstanceCount
 * @property list<InstanceGroupConfig> $InstanceGroups
 * @property list<InstanceFleetConfig> $InstanceFleets
 * @property string $Ec2KeyName
 * @property PlacementType $Placement
 * @property bool $KeepJobFlowAliveWhenNoSteps
 * @property bool $TerminationProtected
 * @property bool $UnhealthyNodeReplacement
 * @property string $HadoopVersion
 * @property string $Ec2SubnetId
 * @property list<string> $Ec2SubnetIds
 * @property string $EmrManagedMasterSecurityGroup
 * @property string $EmrManagedSlaveSecurityGroup
 * @property string $ServiceAccessSecurityGroup
 * @property list<string> $AdditionalMasterSecurityGroups
 * @property list<string> $AdditionalSlaveSecurityGroups
 */
class JobFlowInstancesConfig extends Shape
{
    /**
     * @param array{
     *     MasterInstanceType?: string,
     *     SlaveInstanceType?: string,
     *     InstanceCount?: int,
     *     InstanceGroups?: list<InstanceGroupConfig>,
     *     InstanceFleets?: list<InstanceFleetConfig>,
     *     Ec2KeyName?: string,
     *     Placement?: PlacementType,
     *     KeepJobFlowAliveWhenNoSteps?: bool,
     *     TerminationProtected?: bool,
     *     UnhealthyNodeReplacement?: bool,
     *     HadoopVersion?: string,
     *     Ec2SubnetId?: string,
     *     Ec2SubnetIds?: list<string>,
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
