<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceAccessRoleArn
 * @property string $S3BucketName
 * @property string $S3BucketFolder
 * @property int|null $ErrorRetryDuration
 * @property int|null $MaxFileSize
 * @property int|null $MaxRetryCount
 * @property bool|null $IamAuthEnabled
 */
class NeptuneSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string|null,
     *     S3BucketName: string,
     *     S3BucketFolder: string,
     *     ErrorRetryDuration?: int|null,
     *     MaxFileSize?: int|null,
     *     MaxRetryCount?: int|null,
     *     IamAuthEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
