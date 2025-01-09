<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ApplicationIds
 * @property list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'> $ComputeTypeNames
 * @property 'LICENSED'|'UNLICENSED' $LicenseType
 * @property list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'> $OperatingSystemNames
 * @property string $Owner
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeApplicationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIds?: list<string>,
     *     ComputeTypeNames?: list<'VALUE'|'STANDARD'|'PERFORMANCE'|'POWER'|'GRAPHICS'|'POWERPRO'|'GRAPHICSPRO'|'GRAPHICS_G4DN'|'GRAPHICSPRO_G4DN'>,
     *     LicenseType?: 'LICENSED'|'UNLICENSED',
     *     OperatingSystemNames?: list<'AMAZON_LINUX_2'|'UBUNTU_18_04'|'UBUNTU_20_04'|'UBUNTU_22_04'|'UNKNOWN'|'WINDOWS_10'|'WINDOWS_11'|'WINDOWS_7'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'RHEL_8'|'ROCKY_8'>,
     *     Owner?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
