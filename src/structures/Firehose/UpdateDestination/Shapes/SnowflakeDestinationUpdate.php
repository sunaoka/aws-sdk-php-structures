<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountUrl
 * @property string $PrivateKey
 * @property string $KeyPassphrase
 * @property string $User
 * @property string $Database
 * @property string $Schema
 * @property string $Table
 * @property SnowflakeRoleConfiguration $SnowflakeRoleConfiguration
 * @property 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING' $DataLoadingOption
 * @property string $MetaDataColumnName
 * @property string $ContentColumnName
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property string $RoleARN
 * @property SnowflakeRetryOptions $RetryOptions
 * @property 'FailedDataOnly'|'AllData' $S3BackupMode
 * @property S3DestinationUpdate $S3Update
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 * @property SnowflakeBufferingHints $BufferingHints
 */
class SnowflakeDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     AccountUrl?: string,
     *     PrivateKey?: string,
     *     KeyPassphrase?: string,
     *     User?: string,
     *     Database?: string,
     *     Schema?: string,
     *     Table?: string,
     *     SnowflakeRoleConfiguration?: SnowflakeRoleConfiguration,
     *     DataLoadingOption?: 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING',
     *     MetaDataColumnName?: string,
     *     ContentColumnName?: string,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     RoleARN?: string,
     *     RetryOptions?: SnowflakeRetryOptions,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData',
     *     S3Update?: S3DestinationUpdate,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration,
     *     BufferingHints?: SnowflakeBufferingHints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
