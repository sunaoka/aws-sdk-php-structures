<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GZIP'|'LZ4'|'SNAPPY'|'BZIP2'|'DEFLATE'|'LZO'|'BROTLI'|'ZSTD'|'ZLIB' $CompressionFormat
 * @property 'CSV'|'JSON'|'PARQUET'|'GLUEPARQUET'|'AVRO'|'ORC'|'XML'|'TABLEAUHYPER' $Format
 * @property list<string> $PartitionColumns
 * @property S3Location $Location
 * @property bool $Overwrite
 * @property OutputFormatOptions $FormatOptions
 * @property int<1, 999> $MaxOutputFiles
 */
class Output extends Shape
{
    /**
     * @param array{
     *     CompressionFormat?: 'GZIP'|'LZ4'|'SNAPPY'|'BZIP2'|'DEFLATE'|'LZO'|'BROTLI'|'ZSTD'|'ZLIB',
     *     Format?: 'CSV'|'JSON'|'PARQUET'|'GLUEPARQUET'|'AVRO'|'ORC'|'XML'|'TABLEAUHYPER',
     *     PartitionColumns?: list<string>,
     *     Location: S3Location,
     *     Overwrite?: bool,
     *     FormatOptions?: OutputFormatOptions,
     *     MaxOutputFiles?: int<1, 999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
