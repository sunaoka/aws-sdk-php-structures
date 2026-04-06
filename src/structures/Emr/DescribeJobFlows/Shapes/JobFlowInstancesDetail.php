<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterInstanceType
 * @property string|null $MasterPublicDnsName
 * @property string|null $MasterInstanceId
 * @property string $SlaveInstanceType
 * @property int $InstanceCount
 * @property list<InstanceGroupDetail>|null $InstanceGroups
 * @property int|null $NormalizedInstanceHours
 * @property string|null $Ec2KeyName
 * @property string|null $Ec2SubnetId
 * @property PlacementType|null $Placement
 * @property bool|null $KeepJobFlowAliveWhenNoSteps
 * @property bool|null $TerminationProtected
 * @property bool|null $UnhealthyNodeReplacement
 * @property string|null $HadoopVersion
 */
class JobFlowInstancesDetail extends Shape
{
    /**
     * @param array{
     *     MasterInstanceType: string,
     *     MasterPublicDnsName?: string|null,
     *     MasterInstanceId?: string|null,
     *     SlaveInstanceType: string,
     *     InstanceCount: int,
     *     InstanceGroups?: list<InstanceGroupDetail>|null,
     *     NormalizedInstanceHours?: int|null,
     *     Ec2KeyName?: string|null,
     *     Ec2SubnetId?: string|null,
     *     Placement?: PlacementType|null,
     *     KeepJobFlowAliveWhenNoSteps?: bool|null,
     *     TerminationProtected?: bool|null,
     *     UnhealthyNodeReplacement?: bool|null,
     *     HadoopVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
