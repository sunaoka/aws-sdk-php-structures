<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetReceivedDataGrant;

trait GetReceivedDataGrantTrait
{
    /**
     * @param GetReceivedDataGrantRequest $args
     * @return GetReceivedDataGrantResponse
     */
    public function getReceivedDataGrant(GetReceivedDataGrantRequest $args)
    {
        $result = parent::getReceivedDataGrant($args->toArray());
        return new GetReceivedDataGrantResponse($result->toArray());
    }
}
