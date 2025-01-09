<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WhatIfAnalysisArn
 * @property string $WhatIfAnalysisName
 * @property string $ForecastArn
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class WhatIfAnalysisSummary extends Shape
{
    /**
     * @param array{
     *     WhatIfAnalysisArn?: string,
     *     WhatIfAnalysisName?: string,
     *     ForecastArn?: string,
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
