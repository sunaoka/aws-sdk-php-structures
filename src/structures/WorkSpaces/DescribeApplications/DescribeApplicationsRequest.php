<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ApplicationIds
 * @property list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'>|null $ComputeTypeNames
 * @property 'LICENSED'|'UNLICENSED'|null $LicenseType
 * @property list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>|null $OperatingSystemNames
 * @property string|null $Owner
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeApplicationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIds?: list<string>|null,
     *     ComputeTypeNames?: list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GENERALPURPOSE_4XLARGE'|'GENERALPURPOSE_8XLARGE'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'>|null,
     *     LicenseType?: 'LICENSED'|'UNLICENSED'|null,
     *     OperatingSystemNames?: list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>|null,
     *     Owner?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
