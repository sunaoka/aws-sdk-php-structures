<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PredictorArn
 * @property string $PredictorName
 * @property string $DatasetGroupArn
 * @property bool $IsAutoPredictor
 * @property ReferencePredictorSummary $ReferencePredictorSummary
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class PredictorSummary extends Shape
{
    /**
     * @param array{
     *     PredictorArn?: string,
     *     PredictorName?: string,
     *     DatasetGroupArn?: string,
     *     IsAutoPredictor?: bool,
     *     ReferencePredictorSummary?: ReferencePredictorSummary,
     *     Status?: string,
     *     Message?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
