<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountUrl
 * @property string|null $User
 * @property string|null $Database
 * @property string|null $Schema
 * @property string|null $Table
 * @property SnowflakeRoleConfiguration|null $SnowflakeRoleConfiguration
 * @property 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null $DataLoadingOption
 * @property string|null $MetaDataColumnName
 * @property string|null $ContentColumnName
 * @property SnowflakeVpcConfiguration|null $SnowflakeVpcConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string|null $RoleARN
 * @property SnowflakeRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3DestinationDescription
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 * @property SnowflakeBufferingHints|null $BufferingHints
 */
class SnowflakeDestinationDescription extends Shape
{
    /**
     * @param array{
     *     AccountUrl?: string|null,
     *     User?: string|null,
     *     Database?: string|null,
     *     Schema?: string|null,
     *     Table?: string|null,
     *     SnowflakeRoleConfiguration?: SnowflakeRoleConfiguration|null,
     *     DataLoadingOption?: 'JSON_MAPPING'|'VARIANT_CONTENT_MAPPING'|'VARIANT_CONTENT_AND_METADATA_MAPPING'|null,
     *     MetaDataColumnName?: string|null,
     *     ContentColumnName?: string|null,
     *     SnowflakeVpcConfiguration?: SnowflakeVpcConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN?: string|null,
     *     RetryOptions?: SnowflakeRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3DestinationDescription?: S3DestinationDescription|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null,
     *     BufferingHints?: SnowflakeBufferingHints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
