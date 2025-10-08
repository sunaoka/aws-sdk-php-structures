<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceAdmin;

trait CreateAppInstanceAdminTrait
{
    /**
     * @param CreateAppInstanceAdminRequest $args
     * @return CreateAppInstanceAdminResponse
     */
    public function createAppInstanceAdmin(CreateAppInstanceAdminRequest $args)
    {
        $result = parent::createAppInstanceAdmin($args->toArray());
        return new CreateAppInstanceAdminResponse($result->toArray());
    }
}
