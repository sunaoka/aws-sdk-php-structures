<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySelfservicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $RestartWorkspace
 * @property 'ENABLED'|'DISABLED' $IncreaseVolumeSize
 * @property 'ENABLED'|'DISABLED' $ChangeComputeType
 * @property 'ENABLED'|'DISABLED' $SwitchRunningMode
 * @property 'ENABLED'|'DISABLED' $RebuildWorkspace
 */
class SelfservicePermissions extends Shape
{
    /**
     * @param array{
     *     RestartWorkspace?: 'ENABLED'|'DISABLED',
     *     IncreaseVolumeSize?: 'ENABLED'|'DISABLED',
     *     ChangeComputeType?: 'ENABLED'|'DISABLED',
     *     SwitchRunningMode?: 'ENABLED'|'DISABLED',
     *     RebuildWorkspace?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
