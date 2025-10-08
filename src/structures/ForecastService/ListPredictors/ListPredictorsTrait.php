<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictors;

trait ListPredictorsTrait
{
    /**
     * @param ListPredictorsRequest $args
     * @return ListPredictorsResponse
     */
    public function listPredictors(ListPredictorsRequest $args)
    {
        $result = parent::listPredictors($args->toArray());
        return new ListPredictorsResponse($result->toArray());
    }
}
