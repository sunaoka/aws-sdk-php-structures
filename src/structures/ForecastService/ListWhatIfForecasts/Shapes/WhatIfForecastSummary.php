<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecasts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WhatIfForecastArn
 * @property string $WhatIfForecastName
 * @property string $WhatIfAnalysisArn
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class WhatIfForecastSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfForecastArn?: string,
     *     WhatIfForecastName?: string,
     *     WhatIfAnalysisArn?: string,
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
