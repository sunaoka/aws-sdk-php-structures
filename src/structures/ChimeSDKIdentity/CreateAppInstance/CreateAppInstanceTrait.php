<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstance;

trait CreateAppInstanceTrait
{
    /**
     * @param CreateAppInstanceRequest $args
     * @return CreateAppInstanceResponse
     */
    public function createAppInstance(CreateAppInstanceRequest $args)
    {
        $result = parent::createAppInstance($args->toArray());
        return new CreateAppInstanceResponse($result->toArray());
    }
}
