<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudWatchEncryptionEnabled
 * @property string|null $CloudWatchLogGroupName
 * @property string|null $S3BucketName
 * @property bool|null $S3EncryptionEnabled
 * @property string|null $S3KeyPrefix
 */
class AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchEncryptionEnabled?: bool|null,
     *     CloudWatchLogGroupName?: string|null,
     *     S3BucketName?: string|null,
     *     S3EncryptionEnabled?: bool|null,
     *     S3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
