<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateResourceServer;

trait UpdateResourceServerTrait
{
    /**
     * @param UpdateResourceServerRequest $args
     * @return UpdateResourceServerResponse
     */
    public function updateResourceServer(UpdateResourceServerRequest $args)
    {
        $result = parent::updateResourceServer($args->toArray());
        return new UpdateResourceServerResponse($result->toArray());
    }
}
