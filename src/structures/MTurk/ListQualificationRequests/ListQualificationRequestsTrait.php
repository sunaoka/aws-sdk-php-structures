<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationRequests;

trait ListQualificationRequestsTrait
{
    /**
     * @param ListQualificationRequestsRequest $args
     * @return ListQualificationRequestsResponse
     */
    public function listQualificationRequests(ListQualificationRequestsRequest $args)
    {
        $result = parent::listQualificationRequests($args->toArray());
        return new ListQualificationRequestsResponse($result->toArray());
    }
}
