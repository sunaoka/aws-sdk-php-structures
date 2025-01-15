<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastName
 * @property string $WhatIfAnalysisArn
 * @property list<Shapes\TimeSeriesTransformation>|null $TimeSeriesTransformations
 * @property Shapes\TimeSeriesReplacementsDataSource|null $TimeSeriesReplacementsDataSource
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWhatIfForecastRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastName: string,
     *     WhatIfAnalysisArn: string,
     *     TimeSeriesTransformations?: list<Shapes\TimeSeriesTransformation>|null,
     *     TimeSeriesReplacementsDataSource?: Shapes\TimeSeriesReplacementsDataSource|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
