<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<67108864, max>|null $BlockSizeBytes
 * @property int<65536, max>|null $PageSizeBytes
 * @property 'UNCOMPRESSED'|'GZIP'|'SNAPPY'|null $Compression
 * @property bool|null $EnableDictionaryCompression
 * @property int<0, max>|null $MaxPaddingBytes
 * @property 'V1'|'V2'|null $WriterVersion
 */
class ParquetSerDe extends Shape
{
    /**
     * @param array{
     *     BlockSizeBytes?: int<67108864, max>|null,
     *     PageSizeBytes?: int<65536, max>|null,
     *     Compression?: 'UNCOMPRESSED'|'GZIP'|'SNAPPY'|null,
     *     EnableDictionaryCompression?: bool|null,
     *     MaxPaddingBytes?: int<0, max>|null,
     *     WriterVersion?: 'V1'|'V2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
