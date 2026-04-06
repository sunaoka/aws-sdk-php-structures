<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetDataGrant;

trait GetDataGrantTrait
{
    /**
     * @param GetDataGrantRequest $args
     * @return GetDataGrantResponse
     */
    public function getDataGrant(GetDataGrantRequest $args)
    {
        $result = parent::getDataGrant($args->toArray());
        return new GetDataGrantResponse($result->toArray());
    }
}
