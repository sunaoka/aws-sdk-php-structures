<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\S3Location $IconS3Location
 * @property string $LaunchPath
 * @property string $WorkingDirectory
 * @property string $LaunchParameters
 * @property list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'> $Platforms
 * @property list<string> $InstanceFamilies
 * @property string $AppBlockArn
 * @property array<string, string> $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     IconS3Location: Shapes\S3Location,
     *     LaunchPath: string,
     *     WorkingDirectory?: string,
     *     LaunchParameters?: string,
     *     Platforms: list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'>,
     *     InstanceFamilies: list<string>,
     *     AppBlockArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
