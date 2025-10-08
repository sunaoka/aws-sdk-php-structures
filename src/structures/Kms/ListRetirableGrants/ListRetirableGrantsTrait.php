<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants;

trait ListRetirableGrantsTrait
{
    /**
     * @param ListRetirableGrantsRequest $args
     * @return ListRetirableGrantsResponse
     */
    public function listRetirableGrants(ListRetirableGrantsRequest $args)
    {
        $result = parent::listRetirableGrants($args->toArray());
        return new ListRetirableGrantsResponse($result->toArray());
    }
}
