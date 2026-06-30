<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermitRequests;

trait ListSupportPermitRequestsTrait
{
    /**
     * @param ListSupportPermitRequestsRequest $args
     * @return ListSupportPermitRequestsResponse
     */
    public function listSupportPermitRequests(ListSupportPermitRequestsRequest $args)
    {
        $result = parent::listSupportPermitRequests($args->toArray());
        return new ListSupportPermitRequestsResponse($result->toArray());
    }
}
