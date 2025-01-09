<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecastExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WhatIfForecastExportArn
 * @property list<string> $WhatIfForecastArns
 * @property string $WhatIfForecastExportName
 * @property DataDestination $Destination
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class WhatIfForecastExportSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfForecastExportArn?: string,
     *     WhatIfForecastArns?: list<string>,
     *     WhatIfForecastExportName?: string,
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
