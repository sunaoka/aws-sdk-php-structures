<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetImportJobArn
 * @property string|null $ForecastArn
 * @property string|null $PredictorArn
 */
class MonitorDataSource extends Shape
{
    /**
     * @param array{
     *     DatasetImportJobArn?: string|null,
     *     ForecastArn?: string|null,
     *     PredictorArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
