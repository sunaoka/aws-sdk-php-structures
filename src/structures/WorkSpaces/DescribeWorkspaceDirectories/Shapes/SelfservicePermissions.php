<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $RestartWorkspace
 * @property 'ENABLED'|'DISABLED'|null $IncreaseVolumeSize
 * @property 'ENABLED'|'DISABLED'|null $ChangeComputeType
 * @property 'ENABLED'|'DISABLED'|null $SwitchRunningMode
 * @property 'ENABLED'|'DISABLED'|null $RebuildWorkspace
 * @property 'ENABLED'|'DISABLED'|null $NestedVirtualization
 * @property 'ENABLED'|'DISABLED'|null $EnableEndUserAdvisor
 */
class SelfservicePermissions extends Shape
{
    /**
     * @param array{
     *     RestartWorkspace?: 'ENABLED'|'DISABLED'|null,
     *     IncreaseVolumeSize?: 'ENABLED'|'DISABLED'|null,
     *     ChangeComputeType?: 'ENABLED'|'DISABLED'|null,
     *     SwitchRunningMode?: 'ENABLED'|'DISABLED'|null,
     *     RebuildWorkspace?: 'ENABLED'|'DISABLED'|null,
     *     NestedVirtualization?: 'ENABLED'|'DISABLED'|null,
     *     EnableEndUserAdvisor?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
