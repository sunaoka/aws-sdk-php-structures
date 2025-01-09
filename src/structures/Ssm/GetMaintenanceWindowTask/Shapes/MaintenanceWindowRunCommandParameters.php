<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property CloudWatchOutputConfig $CloudWatchOutputConfig
 * @property string $DocumentHash
 * @property 'Sha256'|'Sha1' $DocumentHashType
 * @property string $DocumentVersion
 * @property NotificationConfig $NotificationConfig
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 * @property array<string, list<string>> $Parameters
 * @property string $ServiceRoleArn
 * @property int<30, 2592000> $TimeoutSeconds
 */
class MaintenanceWindowRunCommandParameters extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig,
     *     DocumentHash?: string,
     *     DocumentHashType?: 'Sha256'|'Sha1',
     *     DocumentVersion?: string,
     *     NotificationConfig?: NotificationConfig,
     *     OutputS3BucketName?: string,
     *     OutputS3KeyPrefix?: string,
     *     Parameters?: array<string, list<string>>,
     *     ServiceRoleArn?: string,
     *     TimeoutSeconds?: int<30, 2592000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
