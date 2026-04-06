<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatastores;

trait ListDatastoresTrait
{
    /**
     * @param ListDatastoresRequest $args
     * @return ListDatastoresResponse
     */
    public function listDatastores(ListDatastoresRequest $args)
    {
        $result = parent::listDatastores($args->toArray());
        return new ListDatastoresResponse($result->toArray());
    }
}
