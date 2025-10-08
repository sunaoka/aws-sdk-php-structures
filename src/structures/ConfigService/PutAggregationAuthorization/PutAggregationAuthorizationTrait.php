<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutAggregationAuthorization;

trait PutAggregationAuthorizationTrait
{
    /**
     * @param PutAggregationAuthorizationRequest $args
     * @return PutAggregationAuthorizationResponse
     */
    public function putAggregationAuthorization(PutAggregationAuthorizationRequest $args)
    {
        $result = parent::putAggregationAuthorization($args->toArray());
        return new PutAggregationAuthorizationResponse($result->toArray());
    }
}
