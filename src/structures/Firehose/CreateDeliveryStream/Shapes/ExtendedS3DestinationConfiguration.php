<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $BucketARN
 * @property string $Prefix
 * @property string $ErrorOutputPrefix
 * @property BufferingHints $BufferingHints
 * @property 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY' $CompressionFormat
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property 'Disabled'|'Enabled' $S3BackupMode
 * @property S3DestinationConfiguration $S3BackupConfiguration
 * @property DataFormatConversionConfiguration $DataFormatConversionConfiguration
 * @property DynamicPartitioningConfiguration $DynamicPartitioningConfiguration
 * @property string $FileExtension
 * @property string $CustomTimeZone
 */
class ExtendedS3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     BucketARN: string,
     *     Prefix?: string,
     *     ErrorOutputPrefix?: string,
     *     BufferingHints?: BufferingHints,
     *     CompressionFormat?: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY',
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'Disabled'|'Enabled',
     *     S3BackupConfiguration?: S3DestinationConfiguration,
     *     DataFormatConversionConfiguration?: DataFormatConversionConfiguration,
     *     DynamicPartitioningConfiguration?: DynamicPartitioningConfiguration,
     *     FileExtension?: string,
     *     CustomTimeZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
