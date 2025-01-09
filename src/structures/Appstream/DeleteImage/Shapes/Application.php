<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DisplayName
 * @property string $IconURL
 * @property string $LaunchPath
 * @property string $LaunchParameters
 * @property bool $Enabled
 * @property array<string, string> $Metadata
 * @property string $WorkingDirectory
 * @property string $Description
 * @property string $Arn
 * @property string $AppBlockArn
 * @property S3Location $IconS3Location
 * @property list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'> $Platforms
 * @property list<string> $InstanceFamilies
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DisplayName?: string,
     *     IconURL?: string,
     *     LaunchPath?: string,
     *     LaunchParameters?: string,
     *     Enabled?: bool,
     *     Metadata?: array<string, string>,
     *     WorkingDirectory?: string,
     *     Description?: string,
     *     Arn?: string,
     *     AppBlockArn?: string,
     *     IconS3Location?: S3Location,
     *     Platforms?: list<'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'>,
     *     InstanceFamilies?: list<string>,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
