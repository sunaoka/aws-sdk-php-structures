<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfAnalysisName
 * @property string $ForecastArn
 * @property Shapes\TimeSeriesSelector $TimeSeriesSelector
 * @property list<Shapes\Tag> $Tags
 */
class CreateWhatIfAnalysisRequest extends Request
{
    /**
     * @param array{
     *     WhatIfAnalysisName: string,
     *     ForecastArn: string,
     *     TimeSeriesSelector?: Shapes\TimeSeriesSelector,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
