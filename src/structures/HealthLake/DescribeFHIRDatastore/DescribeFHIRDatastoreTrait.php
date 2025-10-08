<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore;

trait DescribeFHIRDatastoreTrait
{
    /**
     * @param DescribeFHIRDatastoreRequest $args
     * @return DescribeFHIRDatastoreResponse
     */
    public function describeFHIRDatastore(DescribeFHIRDatastoreRequest $args)
    {
        $result = parent::describeFHIRDatastore($args->toArray());
        return new DescribeFHIRDatastoreResponse($result->toArray());
    }
}
