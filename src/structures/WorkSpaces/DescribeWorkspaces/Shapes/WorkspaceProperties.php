<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL'|null $RunningMode
 * @property int|null $RunningModeAutoStopTimeoutInMinutes
 * @property int|null $RootVolumeSizeGib
 * @property int|null $UserVolumeSizeGib
 * @property 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null $ComputeTypeName
 * @property list<'PCOIP'|'WSP'>|null $Protocols
 */
class WorkspaceProperties extends Shape
{
    /**
     * @param array{
     *     RunningMode?: 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL'|null,
     *     RunningModeAutoStopTimeoutInMinutes?: int|null,
     *     RootVolumeSizeGib?: int|null,
     *     UserVolumeSizeGib?: int|null,
     *     ComputeTypeName?: 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|null,
     *     Protocols?: list<'PCOIP'|'WSP'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
