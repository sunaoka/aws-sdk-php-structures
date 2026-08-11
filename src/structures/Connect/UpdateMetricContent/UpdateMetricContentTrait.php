<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateMetricContent;

trait UpdateMetricContentTrait
{
    /**
     * @param UpdateMetricContentRequest $args
     * @return UpdateMetricContentResponse
     */
    public function updateMetricContent(UpdateMetricContentRequest $args)
    {
        $result = parent::updateMetricContent($args->toArray());
        return new UpdateMetricContentResponse($result->toArray());
    }
}
