<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateResourceServer;

trait CreateResourceServerTrait
{
    /**
     * @param CreateResourceServerRequest $args
     * @return CreateResourceServerResponse
     */
    public function createResourceServer(CreateResourceServerRequest $args)
    {
        $result = parent::createResourceServer($args->toArray());
        return new CreateResourceServerResponse($result->toArray());
    }
}
