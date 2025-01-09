<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilityExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExplainabilityExportArn
 * @property string $ExplainabilityExportName
 * @property DataDestination $Destination
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class ExplainabilityExportSummary extends Shape
{
    /**
     * @param array{
     *     ExplainabilityExportArn?: string,
     *     ExplainabilityExportName?: string,
     *     Destination?: DataDestination,
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
