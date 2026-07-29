<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Csv|null $csv
 * @property Parquet|null $parquet
 * @property Mp4|null $mp4
 * @property Annotation|null $annotation
 */
class FileFormat extends Shape
{
    /**
     * @param array{
     *     csv?: Csv|null,
     *     parquet?: Parquet|null,
     *     mp4?: Mp4|null,
     *     annotation?: Annotation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
