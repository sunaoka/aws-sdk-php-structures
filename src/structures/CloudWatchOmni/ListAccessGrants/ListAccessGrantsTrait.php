<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessGrants;

trait ListAccessGrantsTrait
{
    /**
     * @param ListAccessGrantsRequest $args
     * @return ListAccessGrantsResponse
     */
    public function listAccessGrants(ListAccessGrantsRequest $args)
    {
        $result = parent::listAccessGrants($args->toArray());
        return new ListAccessGrantsResponse($result->toArray());
    }
}
