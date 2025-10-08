<?php

namespace Sunaoka\Aws\Structures\Waf\GetSampledRequests;

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
