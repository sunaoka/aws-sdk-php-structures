<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $ClusterJDBCURL
 * @property CopyCommand $CopyCommand
 * @property string|null $Username
 * @property string|null $Password
 * @property RedshiftRetryOptions|null $RetryOptions
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'Disabled'|'Enabled'|null $S3BackupMode
 * @property S3DestinationConfiguration|null $S3BackupConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class RedshiftDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     ClusterJDBCURL: string,
     *     CopyCommand: CopyCommand,
     *     Username?: string|null,
     *     Password?: string|null,
     *     RetryOptions?: RedshiftRetryOptions|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'Disabled'|'Enabled'|null,
     *     S3BackupConfiguration?: S3DestinationConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
