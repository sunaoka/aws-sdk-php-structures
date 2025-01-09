<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CloudWatchEncryptionEnabled
 * @property string $CloudWatchLogGroupName
 * @property string $S3BucketName
 * @property bool $S3EncryptionEnabled
 * @property string $S3KeyPrefix
 */
class AwsEcsClusterConfigurationExecuteCommandConfigurationLogConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchEncryptionEnabled?: bool,
     *     CloudWatchLogGroupName?: string,
     *     S3BucketName?: string,
     *     S3EncryptionEnabled?: bool,
     *     S3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
