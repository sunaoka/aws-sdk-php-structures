<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GZIP'|'PARQUET' $Compression
 * @property 'TEXT_OR_CSV'|'PARQUET' $Format
 * @property 'CUSTOM' $OutputType
 * @property 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT' $Overwrite
 */
class S3OutputConfigurations extends Shape
{
    /**
     * @param array{
     *     Compression: 'GZIP'|'PARQUET',
     *     Format: 'TEXT_OR_CSV'|'PARQUET',
     *     OutputType: 'CUSTOM',
     *     Overwrite: 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
