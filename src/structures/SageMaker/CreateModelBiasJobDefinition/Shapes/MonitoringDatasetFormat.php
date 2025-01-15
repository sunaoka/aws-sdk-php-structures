<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelBiasJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringCsvDatasetFormat|null $Csv
 * @property MonitoringJsonDatasetFormat|null $Json
 * @property MonitoringParquetDatasetFormat|null $Parquet
 */
class MonitoringDatasetFormat extends Shape
{
    /**
     * @param array{
     *     Csv?: MonitoringCsvDatasetFormat|null,
     *     Json?: MonitoringJsonDatasetFormat|null,
     *     Parquet?: MonitoringParquetDatasetFormat|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
