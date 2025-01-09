<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BlockSizeBytes
 * @property int $PageSizeBytes
 * @property 'UNCOMPRESSED'|'GZIP'|'SNAPPY' $Compression
 * @property bool $EnableDictionaryCompression
 * @property int $MaxPaddingBytes
 * @property 'V1'|'V2' $WriterVersion
 */
class ParquetSerDe extends Shape
{
    /**
     * @param array{
     *     BlockSizeBytes?: int,
     *     PageSizeBytes?: int,
     *     Compression?: 'UNCOMPRESSED'|'GZIP'|'SNAPPY',
     *     EnableDictionaryCompression?: bool,
     *     MaxPaddingBytes?: int,
     *     WriterVersion?: 'V1'|'V2'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
