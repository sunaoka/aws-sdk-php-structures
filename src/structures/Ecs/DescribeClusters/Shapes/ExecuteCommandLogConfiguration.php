<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudWatchLogGroupName
 * @property bool $cloudWatchEncryptionEnabled
 * @property string $s3BucketName
 * @property bool $s3EncryptionEnabled
 * @property string $s3KeyPrefix
 */
class ExecuteCommandLogConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string,
     *     cloudWatchEncryptionEnabled?: bool,
     *     s3BucketName?: string,
     *     s3EncryptionEnabled?: bool,
     *     s3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
