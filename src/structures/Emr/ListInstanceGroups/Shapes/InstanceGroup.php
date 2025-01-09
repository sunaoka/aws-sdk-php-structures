<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property 'MASTER'|'CORE'|'TASK' $InstanceGroupType
 * @property string $BidPrice
 * @property string $InstanceType
 * @property int $RequestedInstanceCount
 * @property int $RunningInstanceCount
 * @property InstanceGroupStatus $Status
 * @property list<Configuration> $Configurations
 * @property int $ConfigurationsVersion
 * @property list<Configuration> $LastSuccessfullyAppliedConfigurations
 * @property int $LastSuccessfullyAppliedConfigurationsVersion
 * @property list<EbsBlockDevice> $EbsBlockDevices
 * @property bool $EbsOptimized
 * @property ShrinkPolicy $ShrinkPolicy
 * @property AutoScalingPolicyDescription $AutoScalingPolicy
 * @property string $CustomAmiId
 */
class InstanceGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Market?: 'ON_DEMAND'|'SPOT',
     *     InstanceGroupType?: 'MASTER'|'CORE'|'TASK',
     *     BidPrice?: string,
     *     InstanceType?: string,
     *     RequestedInstanceCount?: int,
     *     RunningInstanceCount?: int,
     *     Status?: InstanceGroupStatus,
     *     Configurations?: list<Configuration>,
     *     ConfigurationsVersion?: int,
     *     LastSuccessfullyAppliedConfigurations?: list<Configuration>,
     *     LastSuccessfullyAppliedConfigurationsVersion?: int,
     *     EbsBlockDevices?: list<EbsBlockDevice>,
     *     EbsOptimized?: bool,
     *     ShrinkPolicy?: ShrinkPolicy,
     *     AutoScalingPolicy?: AutoScalingPolicyDescription,
     *     CustomAmiId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
