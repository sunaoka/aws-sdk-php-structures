<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeletePendingAggregationRequest;

trait DeletePendingAggregationRequestTrait
{
    /**
     * @param DeletePendingAggregationRequestRequest $args
     * @return void
     */
    public function deletePendingAggregationRequest(DeletePendingAggregationRequestRequest $args)
    {
        parent::deletePendingAggregationRequest($args->toArray());
    }
}
