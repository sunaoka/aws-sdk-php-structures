<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectChildren;

trait ListObjectChildrenTrait
{
    /**
     * @param ListObjectChildrenRequest $args
     * @return ListObjectChildrenResponse
     */
    public function listObjectChildren(ListObjectChildrenRequest $args)
    {
        $result = parent::listObjectChildren($args->toArray());
        return new ListObjectChildrenResponse($result->toArray());
    }
}
