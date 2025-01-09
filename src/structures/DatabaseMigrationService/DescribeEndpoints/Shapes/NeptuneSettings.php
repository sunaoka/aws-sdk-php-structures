<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 * @property string $S3BucketName
 * @property string $S3BucketFolder
 * @property int $ErrorRetryDuration
 * @property int $MaxFileSize
 * @property int $MaxRetryCount
 * @property bool $IamAuthEnabled
 */
class NeptuneSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string,
     *     S3BucketName: string,
     *     S3BucketFolder: string,
     *     ErrorRetryDuration?: int,
     *     MaxFileSize?: int,
     *     MaxRetryCount?: int,
     *     IamAuthEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
