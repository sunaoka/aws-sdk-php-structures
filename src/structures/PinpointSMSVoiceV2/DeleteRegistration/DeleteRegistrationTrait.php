<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistration;

trait DeleteRegistrationTrait
{
    /**
     * @param DeleteRegistrationRequest $args
     * @return DeleteRegistrationResponse
     */
    public function deleteRegistration(DeleteRegistrationRequest $args)
    {
        $result = parent::deleteRegistration($args->toArray());
        return new DeleteRegistrationResponse($result->toArray());
    }
}
