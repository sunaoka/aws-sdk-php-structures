<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'ON_DEMAND'|'SPOT'|null $Market
 * @property 'MASTER'|'CORE'|'TASK' $InstanceRole
 * @property string|null $BidPrice
 * @property string $InstanceType
 * @property int $InstanceCount
 * @property list<Configuration>|null $Configurations
 * @property EbsConfiguration|null $EbsConfiguration
 * @property AutoScalingPolicy|null $AutoScalingPolicy
 * @property string|null $CustomAmiId
 */
class InstanceGroupConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Market?: 'ON_DEMAND'|'SPOT'|null,
     *     InstanceRole: 'MASTER'|'CORE'|'TASK',
     *     BidPrice?: string|null,
     *     InstanceType: string,
     *     InstanceCount: int,
     *     Configurations?: list<Configuration>|null,
     *     EbsConfiguration?: EbsConfiguration|null,
     *     AutoScalingPolicy?: AutoScalingPolicy|null,
     *     CustomAmiId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
