<?php

namespace Sunaoka\Aws\Structures\Appflow\DeleteConnectorProfile;

trait DeleteConnectorProfileTrait
{
    /**
     * @param DeleteConnectorProfileRequest $args
     * @return DeleteConnectorProfileResponse
     */
    public function deleteConnectorProfile(DeleteConnectorProfileRequest $args)
    {
        $result = parent::deleteConnectorProfile($args->toArray());
        return new DeleteConnectorProfileResponse($result->toArray());
    }
}
