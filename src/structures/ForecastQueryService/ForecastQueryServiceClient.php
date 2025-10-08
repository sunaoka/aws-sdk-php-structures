<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService;

class ForecastQueryServiceClient extends \Aws\ForecastQueryService\ForecastQueryServiceClient
{
    use QueryForecast\QueryForecastTrait;
    use QueryWhatIfForecast\QueryWhatIfForecastTrait;
}
