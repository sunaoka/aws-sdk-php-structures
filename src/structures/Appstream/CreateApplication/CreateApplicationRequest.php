<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\S3Location $IconS3Location
 * @property string $LaunchPath
 * @property string|null $WorkingDirectory
 * @property string|null $LaunchParameters
 * @property list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'> $Platforms
 * @property list<string> $InstanceFamilies
 * @property string $AppBlockArn
 * @property array<string, string>|null $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     IconS3Location: Shapes\S3Location,
     *     LaunchPath: string,
     *     WorkingDirectory?: string|null,
     *     LaunchParameters?: string|null,
     *     Platforms: list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'>,
     *     InstanceFamilies: list<string>,
     *     AppBlockArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
