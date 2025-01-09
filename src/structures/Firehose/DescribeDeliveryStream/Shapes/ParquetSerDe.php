<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<67108864, max> $BlockSizeBytes
 * @property int<65536, max> $PageSizeBytes
 * @property 'UNCOMPRESSED'|'GZIP'|'SNAPPY' $Compression
 * @property bool $EnableDictionaryCompression
 * @property int<0, max> $MaxPaddingBytes
 * @property 'V1'|'V2' $WriterVersion
 */
class ParquetSerDe extends Shape
{
    /**
     * @param array{
     *     BlockSizeBytes?: int<67108864, max>,
     *     PageSizeBytes?: int<65536, max>,
     *     Compression?: 'UNCOMPRESSED'|'GZIP'|'SNAPPY',
     *     EnableDictionaryCompression?: bool,
     *     MaxPaddingBytes?: int<0, max>,
     *     WriterVersion?: 'V1'|'V2'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
