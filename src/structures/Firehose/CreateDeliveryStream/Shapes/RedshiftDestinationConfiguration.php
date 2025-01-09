<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $ClusterJDBCURL
 * @property CopyCommand $CopyCommand
 * @property string $Username
 * @property string $Password
 * @property RedshiftRetryOptions $RetryOptions
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property 'Disabled'|'Enabled' $S3BackupMode
 * @property S3DestinationConfiguration $S3BackupConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class RedshiftDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     ClusterJDBCURL: string,
     *     CopyCommand: CopyCommand,
     *     Username?: string,
     *     Password?: string,
     *     RetryOptions?: RedshiftRetryOptions,
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'Disabled'|'Enabled',
     *     S3BackupConfiguration?: S3DestinationConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
