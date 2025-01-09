<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfAnalysisArn
 */
class DeleteWhatIfAnalysisRequest extends Request
{
    /**
     * @param array{WhatIfAnalysisArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
