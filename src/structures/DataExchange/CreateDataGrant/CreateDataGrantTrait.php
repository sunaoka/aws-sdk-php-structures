<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateDataGrant;

trait CreateDataGrantTrait
{
    /**
     * @param CreateDataGrantRequest $args
     * @return CreateDataGrantResponse
     */
    public function createDataGrant(CreateDataGrantRequest $args)
    {
        $result = parent::createDataGrant($args->toArray());
        return new CreateDataGrantResponse($result->toArray());
    }
}
