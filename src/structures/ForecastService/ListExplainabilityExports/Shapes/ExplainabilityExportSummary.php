<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilityExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExplainabilityExportArn
 * @property string|null $ExplainabilityExportName
 * @property DataDestination|null $Destination
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class ExplainabilityExportSummary extends Shape
{
    /**
     * @param array{
     *     ExplainabilityExportArn?: string|null,
     *     ExplainabilityExportName?: string|null,
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
