<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants;

trait ListApplicationGrantsTrait
{
    /**
     * @param ListApplicationGrantsRequest $args
     * @return ListApplicationGrantsResponse
     */
    public function listApplicationGrants(ListApplicationGrantsRequest $args)
    {
        $result = parent::listApplicationGrants($args->toArray());
        return new ListApplicationGrantsResponse($result->toArray());
    }
}
