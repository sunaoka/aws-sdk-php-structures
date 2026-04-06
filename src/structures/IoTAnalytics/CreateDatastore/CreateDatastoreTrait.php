<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore;

trait CreateDatastoreTrait
{
    /**
     * @param CreateDatastoreRequest $args
     * @return CreateDatastoreResponse
     */
    public function createDatastore(CreateDatastoreRequest $args)
    {
        $result = parent::createDatastore($args->toArray());
        return new CreateDatastoreResponse($result->toArray());
    }
}
