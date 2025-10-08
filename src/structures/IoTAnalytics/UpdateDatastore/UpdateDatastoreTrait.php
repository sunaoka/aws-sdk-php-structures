<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore;

trait UpdateDatastoreTrait
{
    /**
     * @param UpdateDatastoreRequest $args
     * @return void
     */
    public function updateDatastore(UpdateDatastoreRequest $args)
    {
        parent::updateDatastore($args->toArray());
    }
}
