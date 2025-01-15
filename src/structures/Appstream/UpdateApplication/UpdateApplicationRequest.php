<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\S3Location|null $IconS3Location
 * @property string|null $LaunchPath
 * @property string|null $WorkingDirectory
 * @property string|null $LaunchParameters
 * @property string|null $AppBlockArn
 * @property list<'LAUNCH_PARAMETERS'|'WORKING_DIRECTORY'>|null $AttributesToDelete
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     IconS3Location?: Shapes\S3Location|null,
     *     LaunchPath?: string|null,
     *     WorkingDirectory?: string|null,
     *     LaunchParameters?: string|null,
     *     AppBlockArn?: string|null,
     *     AttributesToDelete?: list<'LAUNCH_PARAMETERS'|'WORKING_DIRECTORY'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
