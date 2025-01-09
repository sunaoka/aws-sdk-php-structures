<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\S3Location $IconS3Location
 * @property string $LaunchPath
 * @property string $WorkingDirectory
 * @property string $LaunchParameters
 * @property string $AppBlockArn
 * @property list<'LAUNCH_PARAMETERS'|'WORKING_DIRECTORY'> $AttributesToDelete
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     IconS3Location?: Shapes\S3Location,
     *     LaunchPath?: string,
     *     WorkingDirectory?: string,
     *     LaunchParameters?: string,
     *     AppBlockArn?: string,
     *     AttributesToDelete?: list<'LAUNCH_PARAMETERS'|'WORKING_DIRECTORY'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
