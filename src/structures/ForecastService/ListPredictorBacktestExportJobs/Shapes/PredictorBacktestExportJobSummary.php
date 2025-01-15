<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictorBacktestExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PredictorBacktestExportJobArn
 * @property string|null $PredictorBacktestExportJobName
 * @property DataDestination|null $Destination
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class PredictorBacktestExportJobSummary extends Shape
{
    /**
     * @param array{
     *     PredictorBacktestExportJobArn?: string|null,
     *     PredictorBacktestExportJobName?: string|null,
     *     Destination?: DataDestination|null,
     *     Status?: string|null,
     *     Message?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
