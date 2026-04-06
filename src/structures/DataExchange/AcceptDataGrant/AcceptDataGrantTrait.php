<?php

namespace Sunaoka\Aws\Structures\DataExchange\AcceptDataGrant;

trait AcceptDataGrantTrait
{
    /**
     * @param AcceptDataGrantRequest $args
     * @return AcceptDataGrantResponse
     */
    public function acceptDataGrant(AcceptDataGrantRequest $args)
    {
        $result = parent::acceptDataGrant($args->toArray());
        return new AcceptDataGrantResponse($result->toArray());
    }
}
