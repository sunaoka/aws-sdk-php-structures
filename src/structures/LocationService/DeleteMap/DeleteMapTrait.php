<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteMap;

trait DeleteMapTrait
{
    /**
     * @param DeleteMapRequest $args
     * @return DeleteMapResponse
     */
    public function deleteMap(DeleteMapRequest $args)
    {
        $result = parent::deleteMap($args->toArray());
        return new DeleteMapResponse($result->toArray());
    }
}
