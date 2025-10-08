<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParentPaths;

trait ListObjectParentPathsTrait
{
    /**
     * @param ListObjectParentPathsRequest $args
     * @return ListObjectParentPathsResponse
     */
    public function listObjectParentPaths(ListObjectParentPathsRequest $args)
    {
        $result = parent::listObjectParentPaths($args->toArray());
        return new ListObjectParentPathsResponse($result->toArray());
    }
}
