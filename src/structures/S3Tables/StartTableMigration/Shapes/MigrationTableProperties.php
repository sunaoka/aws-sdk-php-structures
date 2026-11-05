<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'parquet'|null $writeFormat
 * @property int|null $icebergFormatVersion
 * @property 'zstd'|'snappy'|'gzip'|'uncompressed'|null $compressionCodec
 * @property bool|null $dictionaryEncoding
 */
class MigrationTableProperties extends Shape
{
    /**
     * @param array{
     *     writeFormat?: 'parquet'|null,
     *     icebergFormatVersion?: int|null,
     *     compressionCodec?: 'zstd'|'snappy'|'gzip'|'uncompressed'|null,
     *     dictionaryEncoding?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
