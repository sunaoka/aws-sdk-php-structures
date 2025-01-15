<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListForecastExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ForecastExportJobArn
 * @property string|null $ForecastExportJobName
 * @property DataDestination|null $Destination
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class ForecastExportJobSummary extends Shape
{
    /**
     * @param array{
     *     ForecastExportJobArn?: string|null,
     *     ForecastExportJobName?: string|null,
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
