<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Csv|null $csv
 * @property Parquet|null $parquet
 */
class FileFormat extends Shape
{
    /**
     * @param array{
     *     csv?: Csv|null,
     *     parquet?: Parquet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
