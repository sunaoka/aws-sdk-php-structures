<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountUrl
 * @property string|null $PrivateKey
 * @property string|null $KeyPassphrase
 * @property string|null $User
 * @property string $Database
 * @property string $Schema
 * @property string $Table
 * @property SnowflakeRoleConfiguration|null $SnowflakeRoleConfiguration
 * @property 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null $DataLoadingOption
 * @property string|null $MetaDataColumnName
 * @property string|null $ContentColumnName
 * @property SnowflakeVpcConfiguration|null $SnowflakeVpcConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string $RoleARN
 * @property SnowflakeRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 * @property SnowflakeBufferingHints|null $BufferingHints
 */
class SnowflakeDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     AccountUrl: string,
     *     PrivateKey?: string|null,
     *     KeyPassphrase?: string|null,
     *     User?: string|null,
     *     Database: string,
     *     Schema: string,
     *     Table: string,
     *     SnowflakeRoleConfiguration?: SnowflakeRoleConfiguration|null,
     *     DataLoadingOption?: 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null,
     *     MetaDataColumnName?: string|null,
     *     ContentColumnName?: string|null,
     *     SnowflakeVpcConfiguration?: SnowflakeVpcConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN: string,
     *     RetryOptions?: SnowflakeRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null,
     *     BufferingHints?: SnowflakeBufferingHints|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
