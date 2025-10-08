<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteAggregationAuthorization;

trait DeleteAggregationAuthorizationTrait
{
    /**
     * @param DeleteAggregationAuthorizationRequest $args
     * @return void
     */
    public function deleteAggregationAuthorization(DeleteAggregationAuthorizationRequest $args)
    {
        parent::deleteAggregationAuthorization($args->toArray());
    }
}
