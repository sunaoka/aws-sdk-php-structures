<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile;

trait UpdateConnectorProfileTrait
{
    /**
     * @param UpdateConnectorProfileRequest $args
     * @return UpdateConnectorProfileResponse
     */
    public function updateConnectorProfile(UpdateConnectorProfileRequest $args)
    {
        $result = parent::updateConnectorProfile($args->toArray());
        return new UpdateConnectorProfileResponse($result->toArray());
    }
}
