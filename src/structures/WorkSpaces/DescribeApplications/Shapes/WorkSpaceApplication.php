<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Description
 * @property 'LICENSED'|'UNLICENSED'|null $LicenseType
 * @property string|null $Name
 * @property string|null $Owner
 * @property 'PENDING'|'ERROR'|'AVAILABLE'|'UNINSTALL_ONLY'|null $State
 * @property list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|'GRAPHICS_G6_XLARGE'|'GRAPHICS_G6_2XLARGE'|'GRAPHICS_G6_4XLARGE'|'GRAPHICS_G6_8XLARGE'|'GRAPHICS_G6_16XLARGE'|'GRAPHICS_GR6_4XLARGE'|'GRAPHICS_GR6_8XLARGE'|'GRAPHICS_G6F_LARGE'|'GRAPHICS_G6F_XLARGE'|'GRAPHICS_G6F_2XLARGE'|'GRAPHICS_G6F_4XLARGE'|'GRAPHICS_GR6F_4XLARGE'>|null $SupportedComputeTypeNames
 * @property list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>|null $SupportedOperatingSystemNames
 */
class WorkSpaceApplication extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     LicenseType?: 'LICENSED'|'UNLICENSED'|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     State?: 'PENDING'|'ERROR'|'AVAILABLE'|'UNINSTALL_ONLY'|null,
     *     SupportedComputeTypeNames?: list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'|'GRAPHICS_G6_XLARGE'|'GRAPHICS_G6_2XLARGE'|'GRAPHICS_G6_4XLARGE'|'GRAPHICS_G6_8XLARGE'|'GRAPHICS_G6_16XLARGE'|'GRAPHICS_GR6_4XLARGE'|'GRAPHICS_GR6_8XLARGE'|'GRAPHICS_G6F_LARGE'|'GRAPHICS_G6F_XLARGE'|'GRAPHICS_G6F_2XLARGE'|'GRAPHICS_G6F_4XLARGE'|'GRAPHICS_GR6F_4XLARGE'>|null,
     *     SupportedOperatingSystemNames?: list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
