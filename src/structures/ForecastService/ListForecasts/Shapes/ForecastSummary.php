<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListForecasts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ForecastArn
 * @property string|null $ForecastName
 * @property string|null $PredictorArn
 * @property bool|null $CreatedUsingAutoPredictor
 * @property string|null $DatasetGroupArn
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class ForecastSummary extends Shape
{
    /**
     * @param array{
     *     ForecastArn?: string|null,
     *     ForecastName?: string|null,
     *     PredictorArn?: string|null,
     *     CreatedUsingAutoPredictor?: bool|null,
     *     DatasetGroupArn?: string|null,
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
