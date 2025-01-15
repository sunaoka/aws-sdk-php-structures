<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupId
 * @property int|null $InstanceCount
 * @property list<string>|null $EC2InstanceIdsToTerminate
 * @property ShrinkPolicy|null $ShrinkPolicy
 * @property 'OVERWRITE'|'MERGE'|null $ReconfigurationType
 * @property list<Configuration>|null $Configurations
 */
class InstanceGroupModifyConfig extends Shape
{
    /**
     * @param array{
     *     InstanceGroupId: string,
     *     InstanceCount?: int|null,
     *     EC2InstanceIdsToTerminate?: list<string>|null,
     *     ShrinkPolicy?: ShrinkPolicy|null,
     *     ReconfigurationType?: 'OVERWRITE'|'MERGE'|null,
     *     Configurations?: list<Configuration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
