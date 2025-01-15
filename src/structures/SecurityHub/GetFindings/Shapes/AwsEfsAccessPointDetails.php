<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessPointId
 * @property string|null $Arn
 * @property string|null $ClientToken
 * @property string|null $FileSystemId
 * @property AwsEfsAccessPointPosixUserDetails|null $PosixUser
 * @property AwsEfsAccessPointRootDirectoryDetails|null $RootDirectory
 */
class AwsEfsAccessPointDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointId?: string|null,
     *     Arn?: string|null,
     *     ClientToken?: string|null,
     *     FileSystemId?: string|null,
     *     PosixUser?: AwsEfsAccessPointPosixUserDetails|null,
     *     RootDirectory?: AwsEfsAccessPointRootDirectoryDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
