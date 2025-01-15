<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cloudWatchLogGroupName
 * @property bool|null $cloudWatchEncryptionEnabled
 * @property string|null $s3BucketName
 * @property bool|null $s3EncryptionEnabled
 * @property string|null $s3KeyPrefix
 */
class ExecuteCommandLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string|null,
     *     cloudWatchEncryptionEnabled?: bool|null,
     *     s3BucketName?: string|null,
     *     s3EncryptionEnabled?: bool|null,
     *     s3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
