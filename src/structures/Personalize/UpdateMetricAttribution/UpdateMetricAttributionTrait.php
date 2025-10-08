<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateMetricAttribution;

trait UpdateMetricAttributionTrait
{
    /**
     * @param UpdateMetricAttributionRequest $args
     * @return UpdateMetricAttributionResponse
     */
    public function updateMetricAttribution(UpdateMetricAttributionRequest $args)
    {
        $result = parent::updateMetricAttribution($args->toArray());
        return new UpdateMetricAttributionResponse($result->toArray());
    }
}
