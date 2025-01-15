<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecasts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WhatIfForecastArn
 * @property string|null $WhatIfForecastName
 * @property string|null $WhatIfAnalysisArn
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class WhatIfForecastSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfForecastArn?: string|null,
     *     WhatIfForecastName?: string|null,
     *     WhatIfAnalysisArn?: string|null,
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
