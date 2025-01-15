<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $BucketARN
 * @property string|null $Prefix
 * @property string|null $ErrorOutputPrefix
 * @property BufferingHints $BufferingHints
 * @property 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY' $CompressionFormat
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property 'Disabled'|'Enabled'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3BackupDescription
 * @property DataFormatConversionConfiguration|null $DataFormatConversionConfiguration
 * @property DynamicPartitioningConfiguration|null $DynamicPartitioningConfiguration
 * @property string|null $FileExtension
 * @property string|null $CustomTimeZone
 */
class ExtendedS3DestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     BucketARN: string,
     *     Prefix?: string|null,
     *     ErrorOutputPrefix?: string|null,
     *     BufferingHints: BufferingHints,
     *     CompressionFormat: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY',
     *     EncryptionConfiguration: EncryptionConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     S3BackupMode?: 'Disabled'|'Enabled'|null,
     *     S3BackupDescription?: S3DestinationDescription|null,
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
