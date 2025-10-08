<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetGatewayResponses;

trait GetGatewayResponsesTrait
{
    /**
     * @param GetGatewayResponsesRequest $args
     * @return GetGatewayResponsesResponse
     */
    public function getGatewayResponses(GetGatewayResponsesRequest $args)
    {
        $result = parent::getGatewayResponses($args->toArray());
        return new GetGatewayResponsesResponse($result->toArray());
    }
}
