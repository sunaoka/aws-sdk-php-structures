<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property CloudWatchOutputConfig|null $CloudWatchOutputConfig
 * @property string|null $DocumentHash
 * @property 'Sha256'|'Sha1'|null $DocumentHashType
 * @property string|null $DocumentVersion
 * @property NotificationConfig|null $NotificationConfig
 * @property string|null $OutputS3BucketName
 * @property string|null $OutputS3KeyPrefix
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $ServiceRoleArn
 * @property int<30, 2592000>|null $TimeoutSeconds
 */
class MaintenanceWindowRunCommandParameters extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     CloudWatchOutputConfig?: CloudWatchOutputConfig|null,
     *     DocumentHash?: string|null,
     *     DocumentHashType?: 'Sha256'|'Sha1'|null,
     *     DocumentVersion?: string|null,
     *     NotificationConfig?: NotificationConfig|null,
     *     OutputS3BucketName?: string|null,
     *     OutputS3KeyPrefix?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     ServiceRoleArn?: string|null,
     *     TimeoutSeconds?: int<30, 2592000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
