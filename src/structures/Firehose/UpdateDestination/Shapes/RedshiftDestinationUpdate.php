<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $ClusterJDBCURL
 * @property CopyCommand $CopyCommand
 * @property string $Username
 * @property string $Password
 * @property RedshiftRetryOptions $RetryOptions
 * @property S3DestinationUpdate $S3Update
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property 'Disabled'|'Enabled' $S3BackupMode
 * @property S3DestinationUpdate $S3BackupUpdate
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class RedshiftDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     ClusterJDBCURL?: string,
     *     CopyCommand?: CopyCommand,
     *     Username?: string,
     *     Password?: string,
     *     RetryOptions?: RedshiftRetryOptions,
     *     S3Update?: S3DestinationUpdate,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'Disabled'|'Enabled',
     *     S3BackupUpdate?: S3DestinationUpdate,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
