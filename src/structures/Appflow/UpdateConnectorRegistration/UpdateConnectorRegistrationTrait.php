<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorRegistration;

trait UpdateConnectorRegistrationTrait
{
    /**
     * @param UpdateConnectorRegistrationRequest $args
     * @return UpdateConnectorRegistrationResponse
     */
    public function updateConnectorRegistration(UpdateConnectorRegistrationRequest $args)
    {
        $result = parent::updateConnectorRegistration($args->toArray());
        return new UpdateConnectorRegistrationResponse($result->toArray());
    }
}
