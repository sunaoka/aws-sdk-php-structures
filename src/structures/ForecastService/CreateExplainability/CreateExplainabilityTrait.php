<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainability;

trait CreateExplainabilityTrait
{
    /**
     * @param CreateExplainabilityRequest $args
     * @return CreateExplainabilityResponse
     */
    public function createExplainability(CreateExplainabilityRequest $args)
    {
        $result = parent::createExplainability($args->toArray());
        return new CreateExplainabilityResponse($result->toArray());
    }
}
