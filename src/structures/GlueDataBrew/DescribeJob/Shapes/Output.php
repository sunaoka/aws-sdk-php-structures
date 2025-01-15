<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GZIP'|'LZ4'|'SNAPPY'|'BZIP2'|'DEFLATE'|'LZO'|'BROTLI'|'ZSTD'|'ZLIB'|null $CompressionFormat
 * @property 'CSV'|'JSON'|'PARQUET'|'GLUEPARQUET'|'AVRO'|'ORC'|'XML'|'TABLEAUHYPER'|null $Format
 * @property list<string>|null $PartitionColumns
 * @property S3Location $Location
 * @property bool|null $Overwrite
 * @property OutputFormatOptions|null $FormatOptions
 * @property int<1, 999>|null $MaxOutputFiles
 */
class Output extends Shape
{
    /**
     * @param array{
     *     CompressionFormat?: 'GZIP'|'LZ4'|'SNAPPY'|'BZIP2'|'DEFLATE'|'LZO'|'BROTLI'|'ZSTD'|'ZLIB'|null,
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'GLUEPARQUET'|'AVRO'|'ORC'|'XML'|'TABLEAUHYPER'|null,
     *     PartitionColumns?: list<string>|null,
     *     Location: S3Location,
     *     Overwrite?: bool|null,
     *     FormatOptions?: OutputFormatOptions|null,
     *     MaxOutputFiles?: int<1, 999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
