<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores;

trait ListFHIRDatastoresTrait
{
    /**
     * @param ListFHIRDatastoresRequest $args
     * @return ListFHIRDatastoresResponse
     */
    public function listFHIRDatastores(ListFHIRDatastoresRequest $args)
    {
        $result = parent::listFHIRDatastores($args->toArray());
        return new ListFHIRDatastoresResponse($result->toArray());
    }
}
