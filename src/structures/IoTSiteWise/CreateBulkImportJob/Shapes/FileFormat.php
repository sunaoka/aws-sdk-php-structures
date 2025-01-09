<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Csv $csv
 * @property Parquet $parquet
 */
class FileFormat extends Shape
{
    /**
     * @param array{
     *     csv?: Csv,
     *     parquet?: Parquet
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
