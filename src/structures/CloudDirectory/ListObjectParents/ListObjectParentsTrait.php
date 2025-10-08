<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParents;

trait ListObjectParentsTrait
{
    /**
     * @param ListObjectParentsRequest $args
     * @return ListObjectParentsResponse
     */
    public function listObjectParents(ListObjectParentsRequest $args)
    {
        $result = parent::listObjectParents($args->toArray());
        return new ListObjectParentsResponse($result->toArray());
    }
}
