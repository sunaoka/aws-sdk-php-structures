<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PredictorArn
 * @property string|null $PredictorName
 * @property string|null $DatasetGroupArn
 * @property bool|null $IsAutoPredictor
 * @property ReferencePredictorSummary|null $ReferencePredictorSummary
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class PredictorSummary extends Shape
{
    /**
     * @param array{
     *     PredictorArn?: string|null,
     *     PredictorName?: string|null,
     *     DatasetGroupArn?: string|null,
     *     IsAutoPredictor?: bool|null,
     *     ReferencePredictorSummary?: ReferencePredictorSummary|null,
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
