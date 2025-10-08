<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

trait ListGrantsTrait
{
    /**
     * @param ListGrantsRequest $args
     * @return ListGrantsResponse
     */
    public function listGrants(ListGrantsRequest $args)
    {
        $result = parent::listGrants($args->toArray());
        return new ListGrantsResponse($result->toArray());
    }
}
