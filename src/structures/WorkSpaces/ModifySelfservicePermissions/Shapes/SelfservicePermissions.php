<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySelfservicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $RestartWorkspace
 * @property 'ENABLED'|'DISABLED'|null $IncreaseVolumeSize
 * @property 'ENABLED'|'DISABLED'|null $ChangeComputeType
 * @property 'ENABLED'|'DISABLED'|null $SwitchRunningMode
 * @property 'ENABLED'|'DISABLED'|null $RebuildWorkspace
 */
class SelfservicePermissions extends Shape
{
    /**
     * @param array{
     *     RestartWorkspace?: 'ENABLED'|'DISABLED'|null,
     *     IncreaseVolumeSize?: 'ENABLED'|'DISABLED'|null,
     *     ChangeComputeType?: 'ENABLED'|'DISABLED'|null,
     *     SwitchRunningMode?: 'ENABLED'|'DISABLED'|null,
     *     RebuildWorkspace?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
