<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MasterInstanceType
 * @property string $MasterPublicDnsName
 * @property string $MasterInstanceId
 * @property string $SlaveInstanceType
 * @property int $InstanceCount
 * @property list<InstanceGroupDetail> $InstanceGroups
 * @property int $NormalizedInstanceHours
 * @property string $Ec2KeyName
 * @property string $Ec2SubnetId
 * @property PlacementType $Placement
 * @property bool $KeepJobFlowAliveWhenNoSteps
 * @property bool $TerminationProtected
 * @property bool $UnhealthyNodeReplacement
 * @property string $HadoopVersion
 */
class JobFlowInstancesDetail extends Shape
{
    /**
     * @param array{
     *     MasterInstanceType: string,
     *     MasterPublicDnsName?: string,
     *     MasterInstanceId?: string,
     *     SlaveInstanceType: string,
     *     InstanceCount: int,
     *     InstanceGroups?: list<InstanceGroupDetail>,
     *     NormalizedInstanceHours?: int,
     *     Ec2KeyName?: string,
     *     Ec2SubnetId?: string,
     *     Placement?: PlacementType,
     *     KeepJobFlowAliveWhenNoSteps?: bool,
     *     TerminationProtected?: bool,
     *     UnhealthyNodeReplacement?: bool,
     *     HadoopVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
