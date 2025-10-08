<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor;

trait CreateAutoPredictorTrait
{
    /**
     * @param CreateAutoPredictorRequest $args
     * @return CreateAutoPredictorResponse
     */
    public function createAutoPredictor(CreateAutoPredictorRequest $args)
    {
        $result = parent::createAutoPredictor($args->toArray());
        return new CreateAutoPredictorResponse($result->toArray());
    }
}
