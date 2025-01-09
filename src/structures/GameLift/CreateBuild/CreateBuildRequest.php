<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Version
 * @property Shapes\S3Location $StorageLocation
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property list<Shapes\Tag> $Tags
 * @property string $ServerSdkVersion
 */
class CreateBuildRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Version?: string,
     *     StorageLocation?: Shapes\S3Location,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023',
     *     Tags?: list<Shapes\Tag>,
     *     ServerSdkVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
