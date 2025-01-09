<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetImportJobArn
 * @property string $ForecastArn
 * @property string $PredictorArn
 */
class MonitorDataSource extends Shape
{
    /**
     * @param array{
     *     DatasetImportJobArn?: string,
     *     ForecastArn?: string,
     *     PredictorArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
