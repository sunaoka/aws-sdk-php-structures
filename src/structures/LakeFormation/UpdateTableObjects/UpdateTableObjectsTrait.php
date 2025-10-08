<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects;

trait UpdateTableObjectsTrait
{
    /**
     * @param UpdateTableObjectsRequest $args
     * @return UpdateTableObjectsResponse
     */
    public function updateTableObjects(UpdateTableObjectsRequest $args)
    {
        $result = parent::updateTableObjects($args->toArray());
        return new UpdateTableObjectsResponse($result->toArray());
    }
}
