<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteMetricAttribution;

trait DeleteMetricAttributionTrait
{
    /**
     * @param DeleteMetricAttributionRequest $args
     * @return void
     */
    public function deleteMetricAttribution(DeleteMetricAttributionRequest $args)
    {
        parent::deleteMetricAttribution($args->toArray());
    }
}
