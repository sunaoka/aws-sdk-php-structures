<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $BucketARN
 * @property string|null $Prefix
 * @property string|null $ErrorOutputPrefix
 * @property BufferingHints|null $BufferingHints
 * @property 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY'|null $CompressionFormat
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'Disabled'|'Enabled'|null $S3BackupMode
 * @property S3DestinationConfiguration|null $S3BackupConfiguration
 * @property DataFormatConversionConfiguration|null $DataFormatConversionConfiguration
 * @property DynamicPartitioningConfiguration|null $DynamicPartitioningConfiguration
 * @property string|null $FileExtension
 * @property string|null $CustomTimeZone
 */
class ExtendedS3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     BucketARN: string,
     *     Prefix?: string|null,
     *     ErrorOutputPrefix?: string|null,
     *     BufferingHints?: BufferingHints|null,
     *     CompressionFormat?: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY'|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'Disabled'|'Enabled'|null,
     *     S3BackupConfiguration?: S3DestinationConfiguration|null,
     *     DataFormatConversionConfiguration?: DataFormatConversionConfiguration|null,
     *     DynamicPartitioningConfiguration?: DynamicPartitioningConfiguration|null,
     *     FileExtension?: string|null,
     *     CustomTimeZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
