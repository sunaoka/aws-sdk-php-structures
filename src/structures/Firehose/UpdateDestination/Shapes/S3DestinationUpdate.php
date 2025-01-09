<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

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
 */
class S3DestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     BucketARN?: string,
     *     Prefix?: string,
     *     ErrorOutputPrefix?: string,
     *     BufferingHints?: BufferingHints,
     *     CompressionFormat?: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY',
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
