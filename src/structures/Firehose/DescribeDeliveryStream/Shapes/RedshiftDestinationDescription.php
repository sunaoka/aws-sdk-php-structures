<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $ClusterJDBCURL
 * @property CopyCommand $CopyCommand
 * @property string|null $Username
 * @property RedshiftRetryOptions|null $RetryOptions
 * @property S3DestinationDescription $S3DestinationDescription
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'Disabled'|'Enabled'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3BackupDescription
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class RedshiftDestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     ClusterJDBCURL: string,
     *     CopyCommand: CopyCommand,
     *     Username?: string|null,
     *     RetryOptions?: RedshiftRetryOptions|null,
     *     S3DestinationDescription: S3DestinationDescription,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'Disabled'|'Enabled'|null,
     *     S3BackupDescription?: S3DestinationDescription|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
