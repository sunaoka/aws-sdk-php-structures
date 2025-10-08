<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListLocalDisks;

trait ListLocalDisksTrait
{
    /**
     * @param ListLocalDisksRequest $args
     * @return ListLocalDisksResponse
     */
    public function listLocalDisks(ListLocalDisksRequest $args)
    {
        $result = parent::listLocalDisks($args->toArray());
        return new ListLocalDisksResponse($result->toArray());
    }
}
