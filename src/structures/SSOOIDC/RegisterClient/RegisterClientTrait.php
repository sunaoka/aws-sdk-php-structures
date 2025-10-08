<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\RegisterClient;

trait RegisterClientTrait
{
    /**
     * @param RegisterClientRequest $args
     * @return RegisterClientResponse
     */
    public function registerClient(RegisterClientRequest $args)
    {
        $result = parent::registerClient($args->toArray());
        return new RegisterClientResponse($result->toArray());
    }
}
