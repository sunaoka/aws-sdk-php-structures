<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVInput|null $CSV
 * @property 'NONE'|'GZIP'|'BZIP2'|null $CompressionType
 * @property JSONInput|null $JSON
 * @property ParquetInput|null $Parquet
 */
class InputSerialization extends Shape
{
    /**
     * @param array{
     *     CSV?: CSVInput|null,
     *     CompressionType?: 'NONE'|'GZIP'|'BZIP2'|null,
     *     JSON?: JSONInput|null,
     *     Parquet?: ParquetInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
