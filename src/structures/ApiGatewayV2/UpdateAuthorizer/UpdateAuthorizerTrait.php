<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateAuthorizer;

trait UpdateAuthorizerTrait
{
    /**
     * @param UpdateAuthorizerRequest $args
     * @return UpdateAuthorizerResponse
     */
    public function updateAuthorizer(UpdateAuthorizerRequest $args)
    {
        $result = parent::updateAuthorizer($args->toArray());
        return new UpdateAuthorizerResponse($result->toArray());
    }
}
