<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVInput $CSV
 * @property 'NONE'|'GZIP'|'BZIP2' $CompressionType
 * @property JSONInput $JSON
 * @property ParquetInput $Parquet
 */
class InputSerialization extends Shape
{
    /**
     * @param array{
     *     CSV?: CSVInput,
     *     CompressionType?: 'NONE'|'GZIP'|'BZIP2',
     *     JSON?: JSONInput,
     *     Parquet?: ParquetInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
