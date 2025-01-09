<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL' $RunningMode
 * @property int $RunningModeAutoStopTimeoutInMinutes
 * @property int $RootVolumeSizeGib
 * @property int $UserVolumeSizeGib
 * @property 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN' $ComputeTypeName
 * @property list<'PCOIP'|'WSP'> $Protocols
 * @property 'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8' $OperatingSystemName
 * @property GlobalAcceleratorForWorkSpace $GlobalAccelerator
 */
class WorkspaceProperties extends Shape
{
    /**
     * @param array{
     *     RunningMode?: 'AUTO_STOP'|'ALWAYS_ON'|'MANUAL',
     *     RunningModeAutoStopTimeoutInMinutes?: int,
     *     RootVolumeSizeGib?: int,
     *     UserVolumeSizeGib?: int,
     *     ComputeTypeName?: 'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN',
     *     Protocols?: list<'PCOIP'|'WSP'>,
     *     OperatingSystemName?: 'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8',
     *     GlobalAccelerator?: GlobalAcceleratorForWorkSpace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
