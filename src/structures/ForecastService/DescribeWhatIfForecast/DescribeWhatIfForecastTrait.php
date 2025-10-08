<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast;

trait DescribeWhatIfForecastTrait
{
    /**
     * @param DescribeWhatIfForecastRequest $args
     * @return DescribeWhatIfForecastResponse
     */
    public function describeWhatIfForecast(DescribeWhatIfForecastRequest $args)
    {
        $result = parent::describeWhatIfForecast($args->toArray());
        return new DescribeWhatIfForecastResponse($result->toArray());
    }
}
