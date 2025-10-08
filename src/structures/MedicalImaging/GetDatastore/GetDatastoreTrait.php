<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDatastore;

trait GetDatastoreTrait
{
    /**
     * @param GetDatastoreRequest $args
     * @return GetDatastoreResponse
     */
    public function getDatastore(GetDatastoreRequest $args)
    {
        $result = parent::getDatastore($args->toArray());
        return new GetDatastoreResponse($result->toArray());
    }
}
