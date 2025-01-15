<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DisplayName
 * @property string|null $IconURL
 * @property string|null $LaunchPath
 * @property string|null $LaunchParameters
 * @property bool|null $Enabled
 * @property array<string, string>|null $Metadata
 * @property string|null $WorkingDirectory
 * @property string|null $Description
 * @property string|null $Arn
 * @property string|null $AppBlockArn
 * @property S3Location|null $IconS3Location
 * @property list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'>|null $Platforms
 * @property list<string>|null $InstanceFamilies
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DisplayName?: string|null,
     *     IconURL?: string|null,
     *     LaunchPath?: string|null,
     *     LaunchParameters?: string|null,
     *     Enabled?: bool|null,
     *     Metadata?: array<string, string>|null,
     *     WorkingDirectory?: string|null,
     *     Description?: string|null,
     *     Arn?: string|null,
     *     AppBlockArn?: string|null,
     *     IconS3Location?: S3Location|null,
     *     Platforms?: list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'>|null,
     *     InstanceFamilies?: list<string>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
