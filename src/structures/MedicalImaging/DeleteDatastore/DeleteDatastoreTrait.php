<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteDatastore;

trait DeleteDatastoreTrait
{
    /**
     * @param DeleteDatastoreRequest $args
     * @return DeleteDatastoreResponse
     */
    public function deleteDatastore(DeleteDatastoreRequest $args)
    {
        $result = parent::deleteDatastore($args->toArray());
        return new DeleteDatastoreResponse($result->toArray());
    }
}
