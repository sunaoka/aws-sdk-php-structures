<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteDatastore;

trait DeleteDatastoreTrait
{
    /**
     * @param DeleteDatastoreRequest $args
     * @return void
     */
    public function deleteDatastore(DeleteDatastoreRequest $args)
    {
        parent::deleteDatastore($args->toArray());
    }
}
