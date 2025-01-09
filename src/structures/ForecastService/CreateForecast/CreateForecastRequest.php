<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastName
 * @property string $PredictorArn
 * @property list<string> $ForecastTypes
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\TimeSeriesSelector $TimeSeriesSelector
 */
class CreateForecastRequest extends Request
{
    /**
     * @param array{
     *     ForecastName: string,
     *     PredictorArn: string,
     *     ForecastTypes?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     TimeSeriesSelector?: Shapes\TimeSeriesSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
