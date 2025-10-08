<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\AssociateOriginationIdentity;

trait AssociateOriginationIdentityTrait
{
    /**
     * @param AssociateOriginationIdentityRequest $args
     * @return AssociateOriginationIdentityResponse
     */
    public function associateOriginationIdentity(AssociateOriginationIdentityRequest $args)
    {
        $result = parent::associateOriginationIdentity($args->toArray());
        return new AssociateOriginationIdentityResponse($result->toArray());
    }
}
