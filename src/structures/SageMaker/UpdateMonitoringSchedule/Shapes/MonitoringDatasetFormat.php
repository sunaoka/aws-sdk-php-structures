<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonitoringCsvDatasetFormat $Csv
 * @property MonitoringJsonDatasetFormat $Json
 * @property MonitoringParquetDatasetFormat $Parquet
 */
class MonitoringDatasetFormat extends Shape
{
    /**
     * @param array{
     *     Csv?: MonitoringCsvDatasetFormat,
     *     Json?: MonitoringJsonDatasetFormat,
     *     Parquet?: MonitoringParquetDatasetFormat
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
