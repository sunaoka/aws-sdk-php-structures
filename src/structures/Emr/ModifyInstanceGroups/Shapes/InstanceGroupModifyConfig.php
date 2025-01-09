<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupId
 * @property int $InstanceCount
 * @property list<string> $EC2InstanceIdsToTerminate
 * @property ShrinkPolicy $ShrinkPolicy
 * @property 'OVERWRITE'|'MERGE' $ReconfigurationType
 * @property list<Configuration> $Configurations
 */
class InstanceGroupModifyConfig extends Shape
{
    /**
     * @param array{
     *     InstanceGroupId: string,
     *     InstanceCount?: int,
     *     EC2InstanceIdsToTerminate?: list<string>,
     *     ShrinkPolicy?: ShrinkPolicy,
     *     ReconfigurationType?: 'OVERWRITE'|'MERGE',
     *     Configurations?: list<Configuration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
