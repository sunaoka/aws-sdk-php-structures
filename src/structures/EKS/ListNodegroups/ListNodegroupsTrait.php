<?php

namespace Sunaoka\Aws\Structures\EKS\ListNodegroups;

trait ListNodegroupsTrait
{
    /**
     * @param ListNodegroupsRequest $args
     * @return ListNodegroupsResponse
     */
    public function listNodegroups(ListNodegroupsRequest $args)
    {
        $result = parent::listNodegroups($args->toArray());
        return new ListNodegroupsResponse($result->toArray());
    }
}
