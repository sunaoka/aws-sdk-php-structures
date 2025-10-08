<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetAuthorizers;

trait GetAuthorizersTrait
{
    /**
     * @param GetAuthorizersRequest $args
     * @return GetAuthorizersResponse
     */
    public function getAuthorizers(GetAuthorizersRequest $args)
    {
        $result = parent::getAuthorizers($args->toArray());
        return new GetAuthorizersResponse($result->toArray());
    }
}
