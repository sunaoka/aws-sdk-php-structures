<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $ClusterJDBCURL
 * @property CopyCommand|null $CopyCommand
 * @property string|null $Username
 * @property string|null $Password
 * @property RedshiftRetryOptions|null $RetryOptions
 * @property S3DestinationUpdate|null $S3Update
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'Disabled'|'Enabled'|null $S3BackupMode
 * @property S3DestinationUpdate|null $S3BackupUpdate
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class RedshiftDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     ClusterJDBCURL?: string|null,
     *     CopyCommand?: CopyCommand|null,
     *     Username?: string|null,
     *     Password?: string|null,
     *     RetryOptions?: RedshiftRetryOptions|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'Disabled'|'Enabled'|null,
     *     S3BackupUpdate?: S3DestinationUpdate|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
