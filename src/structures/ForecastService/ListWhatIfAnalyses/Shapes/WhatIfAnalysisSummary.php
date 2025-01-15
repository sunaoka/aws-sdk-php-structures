<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WhatIfAnalysisArn
 * @property string|null $WhatIfAnalysisName
 * @property string|null $ForecastArn
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class WhatIfAnalysisSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfAnalysisArn?: string|null,
     *     WhatIfAnalysisName?: string|null,
     *     ForecastArn?: string|null,
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
