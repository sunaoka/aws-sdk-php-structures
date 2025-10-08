<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponses;

trait GetRouteResponsesTrait
{
    /**
     * @param GetRouteResponsesRequest $args
     * @return GetRouteResponsesResponse
     */
    public function getRouteResponses(GetRouteResponsesRequest $args)
    {
        $result = parent::getRouteResponses($args->toArray());
        return new GetRouteResponsesResponse($result->toArray());
    }
}
