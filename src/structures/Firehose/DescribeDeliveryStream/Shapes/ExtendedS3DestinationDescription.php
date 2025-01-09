<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

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
 * @property S3DestinationDescription $S3BackupDescription
 * @property DataFormatConversionConfiguration $DataFormatConversionConfiguration
 * @property DynamicPartitioningConfiguration $DynamicPartitioningConfiguration
 * @property string $FileExtension
 * @property string $CustomTimeZone
 */
class ExtendedS3DestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     BucketARN: string,
     *     Prefix?: string,
     *     ErrorOutputPrefix?: string,
     *     BufferingHints: BufferingHints,
     *     CompressionFormat: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY',
     *     EncryptionConfiguration: EncryptionConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     S3BackupMode?: 'Disabled'|'Enabled',
     *     S3BackupDescription?: S3DestinationDescription,
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
