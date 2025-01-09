<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessPointId
 * @property string $Arn
 * @property string $ClientToken
 * @property string $FileSystemId
 * @property AwsEfsAccessPointPosixUserDetails $PosixUser
 * @property AwsEfsAccessPointRootDirectoryDetails $RootDirectory
 */
class AwsEfsAccessPointDetails extends Shape
{
    /**
     * @param array{
     *     AccessPointId?: string,
     *     Arn?: string,
     *     ClientToken?: string,
     *     FileSystemId?: string,
     *     PosixUser?: AwsEfsAccessPointPosixUserDetails,
     *     RootDirectory?: AwsEfsAccessPointRootDirectoryDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
