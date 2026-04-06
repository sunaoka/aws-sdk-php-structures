<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountUrl
 * @property string|null $PrivateKey
 * @property string|null $KeyPassphrase
 * @property string|null $User
 * @property string|null $Database
 * @property string|null $Schema
 * @property string|null $Table
 * @property SnowflakeRoleConfiguration|null $SnowflakeRoleConfiguration
 * @property 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null $DataLoadingOption
 * @property string|null $MetaDataColumnName
 * @property string|null $ContentColumnName
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string|null $RoleARN
 * @property SnowflakeRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationUpdate|null $S3Update
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 * @property SnowflakeBufferingHints|null $BufferingHints
 */
class SnowflakeDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     AccountUrl?: string|null,
     *     PrivateKey?: string|null,
     *     KeyPassphrase?: string|null,
     *     User?: string|null,
     *     Database?: string|null,
     *     Schema?: string|null,
     *     Table?: string|null,
     *     SnowflakeRoleConfiguration?: SnowflakeRoleConfiguration|null,
     *     DataLoadingOption?: 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null,
     *     MetaDataColumnName?: string|null,
     *     ContentColumnName?: string|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN?: string|null,
     *     RetryOptions?: SnowflakeRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null,
     *     BufferingHints?: SnowflakeBufferingHints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
