<?php

namespace Sunaoka\Aws\Structures\DataSync\ListStorageSystems;

trait ListStorageSystemsTrait
{
    /**
     * @param ListStorageSystemsRequest $args
     * @return ListStorageSystemsResponse
     */
    public function listStorageSystems(ListStorageSystemsRequest $args)
    {
        $result = parent::listStorageSystems($args->toArray());
        return new ListStorageSystemsResponse($result->toArray());
    }
}
