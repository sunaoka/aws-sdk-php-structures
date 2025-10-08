<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResourceRequests;

trait ListResourceRequestsTrait
{
    /**
     * @param ListResourceRequestsRequest $args
     * @return ListResourceRequestsResponse
     */
    public function listResourceRequests(ListResourceRequestsRequest $args)
    {
        $result = parent::listResourceRequests($args->toArray());
        return new ListResourceRequestsResponse($result->toArray());
    }
}
