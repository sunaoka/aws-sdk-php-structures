<?php

namespace Sunaoka\Aws\Structures\DataSync\AddStorageSystem;

trait AddStorageSystemTrait
{
    /**
     * @param AddStorageSystemRequest $args
     * @return AddStorageSystemResponse
     */
    public function addStorageSystem(AddStorageSystemRequest $args)
    {
        $result = parent::addStorageSystem($args->toArray());
        return new AddStorageSystemResponse($result->toArray());
    }
}
