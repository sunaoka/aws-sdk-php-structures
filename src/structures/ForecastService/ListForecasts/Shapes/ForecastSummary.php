<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListForecasts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ForecastArn
 * @property string $ForecastName
 * @property string $PredictorArn
 * @property bool $CreatedUsingAutoPredictor
 * @property string $DatasetGroupArn
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class ForecastSummary extends Shape
{
    /**
     * @param array{
     *     ForecastArn?: string,
     *     ForecastName?: string,
     *     PredictorArn?: string,
     *     CreatedUsingAutoPredictor?: bool,
     *     DatasetGroupArn?: string,
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
