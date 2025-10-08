<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer;

trait CreateAuthorizerTrait
{
    /**
     * @param CreateAuthorizerRequest $args
     * @return CreateAuthorizerResponse
     */
    public function createAuthorizer(CreateAuthorizerRequest $args)
    {
        $result = parent::createAuthorizer($args->toArray());
        return new CreateAuthorizerResponse($result->toArray());
    }
}
