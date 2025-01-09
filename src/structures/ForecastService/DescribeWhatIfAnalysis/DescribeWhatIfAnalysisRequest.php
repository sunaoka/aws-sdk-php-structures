<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfAnalysisArn
 */
class DescribeWhatIfAnalysisRequest extends Request
{
    /**
     * @param array{WhatIfAnalysisArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
