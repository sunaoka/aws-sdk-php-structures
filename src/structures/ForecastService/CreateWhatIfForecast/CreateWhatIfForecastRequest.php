<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastName
 * @property string $WhatIfAnalysisArn
 * @property list<Shapes\TimeSeriesTransformation> $TimeSeriesTransformations
 * @property Shapes\TimeSeriesReplacementsDataSource $TimeSeriesReplacementsDataSource
 * @property list<Shapes\Tag> $Tags
 */
class CreateWhatIfForecastRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastName: string,
     *     WhatIfAnalysisArn: string,
     *     TimeSeriesTransformations?: list<Shapes\TimeSeriesTransformation>,
     *     TimeSeriesReplacementsDataSource?: Shapes\TimeSeriesReplacementsDataSource,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
