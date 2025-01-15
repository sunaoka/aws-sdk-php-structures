<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastName
 * @property string $PredictorArn
 * @property list<string>|null $ForecastTypes
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\TimeSeriesSelector|null $TimeSeriesSelector
 */
class CreateForecastRequest extends Request
{
    /**
     * @param array{
     *     ForecastName: string,
     *     PredictorArn: string,
     *     ForecastTypes?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TimeSeriesSelector?: Shapes\TimeSeriesSelector|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
