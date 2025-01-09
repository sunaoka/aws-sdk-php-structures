<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Description
 * @property 'LICENSED'|'UNLICENSED' $LicenseType
 * @property string $Name
 * @property string $Owner
 * @property 'PENDING'|'ERROR'|'AVAILABLE'|'UNINSTALL_ONLY' $State
 * @property list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'> $SupportedComputeTypeNames
 * @property list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'> $SupportedOperatingSystemNames
 */
class WorkSpaceApplication extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     Created?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     LicenseType?: 'LICENSED'|'UNLICENSED',
     *     Name?: string,
     *     Owner?: string,
     *     State?: 'PENDING'|'ERROR'|'AVAILABLE'|'UNINSTALL_ONLY',
     *     SupportedComputeTypeNames?: list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'>,
     *     SupportedOperatingSystemNames?: list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
