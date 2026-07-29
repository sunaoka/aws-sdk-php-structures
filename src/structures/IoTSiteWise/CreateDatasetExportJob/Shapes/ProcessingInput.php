<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDatasetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TimeseriesItem>|null $timeseries
 * @property DatasetItem|null $dataset
 */
class ProcessingInput extends Shape
{
    /**
     * @param array{
     *     timeseries?: list<TimeseriesItem>|null,
     *     dataset?: DatasetItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
