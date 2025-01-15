<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $BucketARN
 * @property string|null $Prefix
 * @property string|null $ErrorOutputPrefix
 * @property BufferingHints|null $BufferingHints
 * @property 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY'|null $CompressionFormat
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 */
class S3DestinationUpdate extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     BucketARN?: string|null,
     *     Prefix?: string|null,
     *     ErrorOutputPrefix?: string|null,
     *     BufferingHints?: BufferingHints|null,
     *     CompressionFormat?: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY'|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
