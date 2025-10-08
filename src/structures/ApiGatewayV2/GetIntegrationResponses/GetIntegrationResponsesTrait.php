<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetIntegrationResponses;

trait GetIntegrationResponsesTrait
{
    /**
     * @param GetIntegrationResponsesRequest $args
     * @return GetIntegrationResponsesResponse
     */
    public function getIntegrationResponses(GetIntegrationResponsesRequest $args)
    {
        $result = parent::getIntegrationResponses($args->toArray());
        return new GetIntegrationResponsesResponse($result->toArray());
    }
}
