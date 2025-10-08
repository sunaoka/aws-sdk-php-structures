<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizer;

trait GetAuthorizerTrait
{
    /**
     * @param GetAuthorizerRequest $args
     * @return GetAuthorizerResponse
     */
    public function getAuthorizer(GetAuthorizerRequest $args)
    {
        $result = parent::getAuthorizer($args->toArray());
        return new GetAuthorizerResponse($result->toArray());
    }
}
