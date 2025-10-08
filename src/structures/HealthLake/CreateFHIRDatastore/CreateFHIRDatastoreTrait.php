<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateFHIRDatastore;

trait CreateFHIRDatastoreTrait
{
    /**
     * @param CreateFHIRDatastoreRequest $args
     * @return CreateFHIRDatastoreResponse
     */
    public function createFHIRDatastore(CreateFHIRDatastoreRequest $args)
    {
        $result = parent::createFHIRDatastore($args->toArray());
        return new CreateFHIRDatastoreResponse($result->toArray());
    }
}
