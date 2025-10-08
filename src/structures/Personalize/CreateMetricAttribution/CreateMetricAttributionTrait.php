<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateMetricAttribution;

trait CreateMetricAttributionTrait
{
    /**
     * @param CreateMetricAttributionRequest $args
     * @return CreateMetricAttributionResponse
     */
    public function createMetricAttribution(CreateMetricAttributionRequest $args)
    {
        $result = parent::createMetricAttribution($args->toArray());
        return new CreateMetricAttributionResponse($result->toArray());
    }
}
