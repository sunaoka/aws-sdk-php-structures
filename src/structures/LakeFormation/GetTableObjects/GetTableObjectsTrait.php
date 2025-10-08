<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTableObjects;

trait GetTableObjectsTrait
{
    /**
     * @param GetTableObjectsRequest $args
     * @return GetTableObjectsResponse
     */
    public function getTableObjects(GetTableObjectsRequest $args)
    {
        $result = parent::getTableObjects($args->toArray());
        return new GetTableObjectsResponse($result->toArray());
    }
}
