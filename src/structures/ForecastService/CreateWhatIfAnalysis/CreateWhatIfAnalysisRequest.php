<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfAnalysisName
 * @property string $ForecastArn
 * @property Shapes\TimeSeriesSelector|null $TimeSeriesSelector
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWhatIfAnalysisRequest extends Request
{
    /**
     * @param array{
     *     WhatIfAnalysisName: string,
     *     ForecastArn: string,
     *     TimeSeriesSelector?: Shapes\TimeSeriesSelector|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
