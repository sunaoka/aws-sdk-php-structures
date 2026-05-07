<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM'|'ATHENA'|'REDSHIFT' $OutputType
 * @property 'TEXT_OR_CSV'|'PARQUET' $Format
 * @property 'GZIP'|'PARQUET' $Compression
 * @property 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT' $Overwrite
 */
class S3OutputConfigurations extends Shape
{
    /**
     * @param array{
     *     OutputType: 'CUSTOM'|'ATHENA'|'REDSHIFT',
     *     Format: 'TEXT_OR_CSV'|'PARQUET',
     *     Compression: 'GZIP'|'PARQUET',
     *     Overwrite: 'CREATE_NEW_REPORT'|'OVERWRITE_REPORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
