<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteResourceServer;

trait DeleteResourceServerTrait
{
    /**
     * @param DeleteResourceServerRequest $args
     * @return void
     */
    public function deleteResourceServer(DeleteResourceServerRequest $args)
    {
        parent::deleteResourceServer($args->toArray());
    }
}
