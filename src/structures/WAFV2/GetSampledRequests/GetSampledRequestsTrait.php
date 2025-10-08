<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests;

trait GetSampledRequestsTrait
{
    /**
     * @param GetSampledRequestsRequest $args
     * @return GetSampledRequestsResponse
     */
    public function getSampledRequests(GetSampledRequestsRequest $args)
    {
        $result = parent::getSampledRequests($args->toArray());
        return new GetSampledRequestsResponse($result->toArray());
    }
}
