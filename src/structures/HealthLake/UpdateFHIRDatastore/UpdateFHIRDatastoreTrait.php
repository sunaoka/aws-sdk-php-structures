<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateFHIRDatastore;

trait UpdateFHIRDatastoreTrait
{
    /**
     * @param UpdateFHIRDatastoreRequest $args
     * @return UpdateFHIRDatastoreResponse
     */
    public function updateFHIRDatastore(UpdateFHIRDatastoreRequest $args)
    {
        $result = parent::updateFHIRDatastore($args->toArray());
        return new UpdateFHIRDatastoreResponse($result->toArray());
    }
}
