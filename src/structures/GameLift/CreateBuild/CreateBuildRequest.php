<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $Version
 * @property Shapes\S3Location|null $StorageLocation
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|'WINDOWS_2022'|null $OperatingSystem
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ServerSdkVersion
 */
class CreateBuildRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Version?: string|null,
     *     StorageLocation?: Shapes\S3Location|null,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|'WINDOWS_2022'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ServerSdkVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
