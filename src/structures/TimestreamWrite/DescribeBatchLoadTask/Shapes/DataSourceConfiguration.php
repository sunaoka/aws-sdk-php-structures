<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceS3Configuration $DataSourceS3Configuration
 * @property CsvConfiguration|null $CsvConfiguration
 * @property 'CSV' $DataFormat
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     DataSourceS3Configuration: DataSourceS3Configuration,
     *     CsvConfiguration?: CsvConfiguration|null,
     *     DataFormat: 'CSV'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
