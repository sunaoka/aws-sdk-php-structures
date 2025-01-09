<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property 'MASTER'|'CORE'|'TASK' $InstanceRole
 * @property string $BidPrice
 * @property string $InstanceType
 * @property int $InstanceCount
 * @property list<Configuration> $Configurations
 * @property EbsConfiguration $EbsConfiguration
 * @property AutoScalingPolicy $AutoScalingPolicy
 * @property string $CustomAmiId
 */
class InstanceGroupConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Market?: 'ON_DEMAND'|'SPOT',
     *     InstanceRole: 'MASTER'|'CORE'|'TASK',
     *     BidPrice?: string,
     *     InstanceType: string,
     *     InstanceCount: int,
     *     Configurations?: list<Configuration>,
     *     EbsConfiguration?: EbsConfiguration,
     *     AutoScalingPolicy?: AutoScalingPolicy,
     *     CustomAmiId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
