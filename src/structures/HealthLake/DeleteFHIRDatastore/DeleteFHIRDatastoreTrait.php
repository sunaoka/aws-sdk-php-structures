<?php

namespace Sunaoka\Aws\Structures\HealthLake\DeleteFHIRDatastore;

trait DeleteFHIRDatastoreTrait
{
    /**
     * @param DeleteFHIRDatastoreRequest $args
     * @return DeleteFHIRDatastoreResponse
     */
    public function deleteFHIRDatastore(DeleteFHIRDatastoreRequest $args)
    {
        $result = parent::deleteFHIRDatastore($args->toArray());
        return new DeleteFHIRDatastoreResponse($result->toArray());
    }
}
