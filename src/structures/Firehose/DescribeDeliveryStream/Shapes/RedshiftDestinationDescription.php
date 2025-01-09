<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $ClusterJDBCURL
 * @property CopyCommand $CopyCommand
 * @property string $Username
 * @property RedshiftRetryOptions $RetryOptions
 * @property S3DestinationDescription $S3DestinationDescription
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property 'Disabled'|'Enabled' $S3BackupMode
 * @property S3DestinationDescription $S3BackupDescription
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class RedshiftDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     ClusterJDBCURL: string,
     *     CopyCommand: CopyCommand,
     *     Username?: string,
     *     RetryOptions?: RedshiftRetryOptions,
     *     S3DestinationDescription: S3DestinationDescription,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'Disabled'|'Enabled',
     *     S3BackupDescription?: S3DestinationDescription,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
