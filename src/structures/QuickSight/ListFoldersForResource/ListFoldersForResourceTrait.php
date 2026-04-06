<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFoldersForResource;

trait ListFoldersForResourceTrait
{
    /**
     * @param ListFoldersForResourceRequest $args
     * @return ListFoldersForResourceResponse
     */
    public function listFoldersForResource(ListFoldersForResourceRequest $args)
    {
        $result = parent::listFoldersForResource($args->toArray());
        return new ListFoldersForResourceResponse($result->toArray());
    }
}
