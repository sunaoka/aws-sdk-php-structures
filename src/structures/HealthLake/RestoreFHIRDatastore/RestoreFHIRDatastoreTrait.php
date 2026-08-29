<?php

namespace Sunaoka\Aws\Structures\HealthLake\RestoreFHIRDatastore;

trait RestoreFHIRDatastoreTrait
{
    /**
     * @param RestoreFHIRDatastoreRequest $args
     * @return RestoreFHIRDatastoreResponse
     */
    public function restoreFHIRDatastore(RestoreFHIRDatastoreRequest $args)
    {
        $result = parent::restoreFHIRDatastore($args->toArray());
        return new RestoreFHIRDatastoreResponse($result->toArray());
    }
}
