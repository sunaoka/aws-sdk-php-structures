<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'ON_DEMAND'|'SPOT'|null $Market
 * @property 'MASTER'|'CORE'|'TASK'|null $InstanceGroupType
 * @property string|null $BidPrice
 * @property string|null $InstanceType
 * @property int|null $RequestedInstanceCount
 * @property int|null $RunningInstanceCount
 * @property InstanceGroupStatus|null $Status
 * @property list<Configuration>|null $Configurations
 * @property int|null $ConfigurationsVersion
 * @property list<Configuration>|null $LastSuccessfullyAppliedConfigurations
 * @property int|null $LastSuccessfullyAppliedConfigurationsVersion
 * @property list<EbsBlockDevice>|null $EbsBlockDevices
 * @property bool|null $EbsOptimized
 * @property ShrinkPolicy|null $ShrinkPolicy
 * @property AutoScalingPolicyDescription|null $AutoScalingPolicy
 * @property string|null $CustomAmiId
 */
class InstanceGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Market?: 'ON_DEMAND'|'SPOT'|null,
     *     InstanceGroupType?: 'MASTER'|'CORE'|'TASK'|null,
     *     BidPrice?: string|null,
     *     InstanceType?: string|null,
     *     RequestedInstanceCount?: int|null,
     *     RunningInstanceCount?: int|null,
     *     Status?: InstanceGroupStatus|null,
     *     Configurations?: list<Configuration>|null,
     *     ConfigurationsVersion?: int|null,
     *     LastSuccessfullyAppliedConfigurations?: list<Configuration>|null,
     *     LastSuccessfullyAppliedConfigurationsVersion?: int|null,
     *     EbsBlockDevices?: list<EbsBlockDevice>|null,
     *     EbsOptimized?: bool|null,
     *     ShrinkPolicy?: ShrinkPolicy|null,
     *     AutoScalingPolicy?: AutoScalingPolicyDescription|null,
     *     CustomAmiId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
